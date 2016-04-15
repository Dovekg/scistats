<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TasksRepository;
use Yuansir\Toastr\Facades\Toastr;

class AdminController extends Controller
{
    protected $tasks;
    public function __construct(TasksRepository $tasks)
    {
        $this->tasks = $tasks;
    }

    public function getTasks()
    {
        $tasks = $this->tasks->paginate(10);
        return view('admin.tasks.index', compact('tasks'));
    }
    
    public function confirmTask(Request $request, $id)
    {
        $state = $this->tasks->find($id)->verified;
        if ($state) {
            $this->tasks->update(['verified' => false, 'paid' => 2], $id);
            Toastr::success('已确认任务', '操作成功');
        } else {
            $this->tasks->update(['verified' => true, 'paid' => 3], $id);
            Toastr::success('已取消确认', '操作成功');
        }
        return redirect()->back();
    }
}
