<?php

namespace App\Http\Controllers\Dema;

use App\Repositories\TasksRepository;
use App\Repositories\MethodsRepository;
use App\Repositories\PayRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Criteria\UserTasksLimit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TasksController extends Controller
{
    protected $repo;
    /**
     * TasksController constructor.
     */
    public function __construct(TasksRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PayRepository $pay)
    {
        $this->repo->pushCriteria(new UserTasksLimit());
        $tasks = $this->repo->all();
        $pays = $pay->all();

        return view('dema.tasks.index', compact('tasks', 'number', 'pays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MethodsRepository $methods)
    {
        $methods = $methods->all();
        return view('dema.tasks.create', compact('methods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MethodsRepository $methodsRepo)
    {
        $methods = $request->get('methods');

        $budged = 0.0;
        if($methods){
            $prices = $methodsRepo->find($methods)->lists('price');
            foreach($prices as $price)
            {
                $budged += $price;
            }

        }


        $task = [];
        $task = $this->uploadFile($request, 'data', $task);
        $task = $this->uploadFile($request, 'review', $task);
        $task['user_id'] = Auth::user()->id;
        $task['description'] = $request->get('description');
        $task['phone'] = $request->get('phone');
        $task['email'] = $request->get('email');
        $task['budged'] = $budged;
//        dd($task);
        $id = $this->repo->create($task)->id;
        
        if($methods)
        {
            foreach ($methods as $key => $method)
            {
                $this->repo->find($id)->methods()->attach($method);
            }
        }
        
        return redirect(route('dema.tasks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PayRepository $pay, $id)
    {
        $task = $this->repo->find($id);
        $pays = $pay->all();
//        dd($task);
//        $methods = $task->methods()->get();
//        dd($task);
        return view('dema.tasks.show', compact('task', 'pays'));
    }


    public function postPay(Request $request, $id)
    {
//        dd($id);
        $task = $request->only('pay_method', 'pay_account', 'require_invoice');
        $task['paid'] = 2;
        $this->repo->update($task, $id);
        return redirect(route('dema.tasks.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MethodsRepository $methods, $id)
    {
        $methods = $methods->all();
        $task = $this->repo->find($id);
//        $task->methods = $this->repo->find($id)->getModel()->methods()->get()->toArray();
//        dd($task);
        return view('dema.tasks.edit', compact('methods', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->repo->find($id)->getModel()->methods()->detach();

        $methods = $request->get('methods');
        if($methods){
            foreach ($methods as $key => $method)
            {
                $this->repo->find($id)->getModel()->methods()->attach($key);
            }
        }

        $task = [];
        $task = $this->uploadFile($request, 'data', $task);
        $task = $this->uploadFile($request, 'review', $task);
        $task['description'] = $request->get('description');
        $task['phone'] = $request->get('phone');
        $task['email'] = $request->get('email');
        $this->repo->update($task, $id);
        return redirect(route('dema.tasks.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect(route('dema.tasks.index'));
    }

    /**
     * @param Request $request
     * @param $task
     * @return mixed
     */
    public function uploadFile(Request $request, $type, $task)
    {
        if ($request->hasFile($type . '_file')) {
            $file = $request->file($type . '_file');
            if ($file->isValid()) {
                $newFileName = md5(time() . rand(0, 1000)) . '.' . $file->getClientOriginalExtension();
                $savePath = $newFileName;
                Storage::put(
                    $savePath,
                    file_get_contents($file->getRealPath())
                );
                $task[$type . '_mime'] = $file->getClientMimeType();
                $task[$type . '_ori_filename'] = $file->getClientOriginalName();
                $task[$type . '_file'] = $savePath;
                return $task;
            }
            return $task;
        }
        return $task;
    }
}
