<?php

namespace App\Http\Controllers\Ana;

use App\Repositories\Criteria\AnaTasksLimit;
use App\Repositories\TasksRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yuansir\Toastr\Facades\Toastr;

class AnaController extends Controller
{

    protected $tasks;
    /**
     * AnaController constructor.
     */
    public function __construct(TasksRepository $tasks)
    {
        $this->tasks = $tasks;
    }

    public function getTasks()
    {
        $this->tasks->pushCriteria(new AnaTasksLimit());
        $tasks = $this->tasks->all();
        return view('ana.tasks.index', compact('tasks'));
    }

    public function getClaimed()
    {

        $tasks = $this->tasks->findAllBy('claimed_user_id', Auth::user()->id);
        return view('ana.tasks.claimed', compact('tasks'));
    }

    public function getFinished()
    {

    }

    public function showTask($id)
    {
        $task = $this->tasks->find($id);
        return view('ana.tasks.show', compact('task'));
    }

    public function claimTask($id)
    {
        $state = $this->tasks->find($id)->claimed;
//        $this->tasks->update(['claimed' => !$state], $id);
        if ($state) {
            $this->tasks->update(['claimed' => false, 'claimed_user_id' => null], $id);
            Toastr::success('已取消任务', '操作成功');
        } else {
            $this->tasks->update(['claimed' => true, 'claimed_user_id' => Auth::user()->id], $id);
            Toastr::success('已领取任务', '操作成功');
        }
        return redirect()->back();
    }


    public function finishTask(Request $request, $id)
    {
        $task = [];
        $task = $this->uploadFile($request, 'result', $task);
        $task['completed'] = true;
        $this->tasks->update($task, $id);
        Toastr::success('分析工作成功完成','更新成功');
        return redirect()->back();
    }
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
