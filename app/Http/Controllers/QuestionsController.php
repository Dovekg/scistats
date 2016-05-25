<?php

namespace App\Http\Controllers;

use App\Repositories\QuestionsRepository;
use Illuminate\Http\Request;
use App\Repositories\MethodsRepository;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Yuansir\Toastr\Facades\Toastr;


class QuestionsController extends Controller
{
    protected $ques;
    public function __construct(QuestionsRepository $repo)
    {
        $this->ques = $repo;
    }

    public function index(MethodsRepository $methods)
    {
        $methods = $methods->all();
        return view('index', compact('methods'));
    }

    public function store(Request $request)
    {
        $methods = $request->get('methods');
        $method = [];
        if ($request->hasFile('sample')) {
            $file = $request->file('sample');
            if ($file->isValid()) {
                $newFileName = md5(time() . rand(0, 1000)) . '.' . $file->getClientOriginalExtension();
                $savePath = $newFileName;
                Storage::put(
                    $savePath,
                    file_get_contents($file->getRealPath())
                );
                $method['sample'] = $savePath;
            }
        }
        $method['description'] = $request->get('description');
        $method['quantity'] = $request->get('quantity');
        $method['email'] = $request->get('email');
        $id = $this->ques->create($method)->id;
        if($methods)
        {
            foreach ($methods as $key => $method)
            {
                $this->ques->find($id)->methods()->attach($key);
            }
        }
        Toastr::success('咨询添加成功','成功');
        return redirect()->back();
    }


    public function uploadFile(Request $request, $type, $task)
    {
        if ($request->hasFile($type)) {
            $file = $request->file($type);
            if ($file->isValid()) {
                $newFileName = md5(time() . rand(0, 1000)) . '.' . $file->getClientOriginalExtension();
                $savePath = $newFileName;
                Storage::put(
                    $savePath,
                    file_get_contents($file->getRealPath())
                );
                $task[$type] = $savePath;
                return $task;
            }
            return $task;
        }
        return $task;
    }
}
