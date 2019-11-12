<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TasksController extends Controller
{
    public function index(){
        $tasks = App\Task::all();
//        dd($tasks);
        return view('hello', compact('tasks'));
    }

    public function show($NumberPage){
        $task = App\Task::find($NumberPage);
//        dd($task);
        return view('tasks.show', compact('task'));
    }
}
