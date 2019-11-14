<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

//Route::get("/tasks", function(){
////    $tasks = DB::table('tasks')->get();
//    $tasks = App\Task::incomplete();
//
//    return view("hello", compact('tasks'));
//});
//
//Route::get("/tasks/{task}", function($id){
////    $task = DB::table('tasks')->find($id);
//    $task = App\Task::find($id);
////    dd($task);
//    return view("tasks.show", compact('task'));
//});

Route::get("/tasks", 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get("index", 'PostsController@index');
Route::get("index/{pp}", 'PostsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
