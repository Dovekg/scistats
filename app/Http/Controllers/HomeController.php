<?php

namespace App\Http\Controllers;

use App\Repositories\QuestionsRepository;
use App\Repositories\TasksRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Repositories\MethodsRepository;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['main', 'question']);
    }


    public function main(MethodsRepository $methods)
    {
        $methods = $methods->all();
        return view('index', compact('methods'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @param TasksRepository $task
     * @param $path
     * @return mixed
     */
    public function downloadData(TasksRepository $task, $path)
    {
        $entry = $task->findBy('data_file', $path);
        $file = Storage::disk('local')->get($entry->data_file);
        return (new Response($file, 200))
            ->header('Content-Type', $entry->data_mime);
    }


    public function downloadSample(QuestionsRepository $question, $path)
    {
        $entry = $question->findBy('sample', $path);
        $file = Storage::disk('local')->get($entry->sample);
        return (new Response($file, 200))
            ->header('Content-Type', $entry->sample_mime);
    }

    /**
     * @param TasksRepository $task
     * @param $path
     * @return mixed
     */
    public function downloadReview(TasksRepository $task, $path)
    {
        $entry = $task->findBy('review_file', $path);
        $file = Storage::disk('local')->get($entry->review_file);
        return (new Response($file, 200))
            ->header('Content-Type', $entry->review_mime);
    }

    /**
     * @param TasksRepository $task
     * @param $path
     * @return mixed
     */
    public function downloadResult(TasksRepository $task, $path)
    {
        $entry = $task->findBy('result_file', $path);
        $file = Storage::disk('local')->get($entry->result_file);
        return (new Response($file, 200))
            ->header('Content-Type', $entry->result_mime);
    }
}
