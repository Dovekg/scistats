<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TasksRepository;

class TasksController extends Controller
{
    protected $repo;
    public function __construt(TasksRepository $repo)
    {
        $this->repo = $repo;
    }
    public function getAll()
    {
        $tasks = $this->repo->all();
        return view('admin.tasks.index', compact('tasks'));
    }
    
    public function confirm(Request $request, $id)
    {
        $task = $this->repo->find($id);
        $task->verified = !task->verified;
    }
}
