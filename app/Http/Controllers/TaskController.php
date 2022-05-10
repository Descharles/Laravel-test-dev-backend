<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }
     public function index_tri()
    {
        return view('index', [
            'tasks' => \App\Models\Task::orderBy('title', 'asc')->get()
        ]);
    }
    public function renderTaskDetail(int $taskId)
    {
        return view('detail', [
            'task' => \App\Models\Task::find($taskId)
        ]);
    }
    public function deletetask(int $taskId)
    {
            \App\Models\Task::find($taskId)->delete();
            return view('SuppressionReussie',[]);
    }
}
