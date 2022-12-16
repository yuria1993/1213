<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = Todo::all();
        return view('index', ['todos'=>$todos]);
        
    }


    public function create(TodoRequest $request)
    {
        $todo=$request->all();
        Todo::create($todo);
        return redirect('/');
    }

    public function update(Request $request)
    {
        $todo = $request->all();
        unset($todo['_token']);
        unset($todo['update']);
        Todo::where('id',$request->id)->update($todo);

        return redirect('/');
    }

    public function delete(Request $request)
    {
        $todo = $request->all();
        unset($todo['_token']);
        unset($todo['delete']);
        Todo::where('id',$request->id)->delete($todo);

        return redirect('/');
    }
}
