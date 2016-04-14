<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TasksRepository;

class AdminController extends Controller
{
    protected $tasks;
    public function __construct(TasksRepository $tasks)
    {
        $this->tasks = $tasks;
    }

    public function getTasks()
    {
        $tasks = $this->tasks->all();
        return view('admin.tasks.index', compact('tasks'));
    }
    
    public function confirmTask(Request $request, $id)
    {
        $task = $this->tasks->find($id);
//        $task->verified = !task->verified;
    }
}
