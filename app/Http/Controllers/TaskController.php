<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public  function index(){

        $task= Task::orderBy('completed_at')
        ->orderBy('id','DESC')
        ->get();
        return view('tasks.index',[
            'task' => $task,
        ]);

    }

    function create(){
        return view('tasks.create');
    }


    function store(Request $request){
        $request->validate([
            "description" => "required|max:255",
        ]);

    Task::create([
       'description'=> request('description'),
      ]);
        
        return redirect('/');
    }

    function update($id){
        $task = Task::find($id);
        $task->completed_at = now();
        $task->save();

        return redirect('/');
    }

    function delete($id){
        $task = Task::find($id);
        $task->delete();
        return redirect('/'); 

    }
}
