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
                $task['sample_mime'] = $file->getClientMimeType();
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

    public function all()
    {
        $questions = $this->ques->all();
        return view('user.questions.index', compact('questions'));
    }

    public function show($id)
    {
        $question = $this->ques->find($id);
        return view('user.questions.show', compact('question'));
    }

    public function destroy()
    {
        $this->ques->delete($id);
        Toastr::success('匿名质询删除成功','成功');
        return redirect()->back();
    }

}
