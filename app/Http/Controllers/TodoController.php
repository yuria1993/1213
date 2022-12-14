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

    public function add()
    {
        return view('add');
    }

    public function create(TodoRequest $request)
    {
        $todo=$request->all();
        Todo::create($todo);
        return redirect('/');
    }
    
    public function update(Request $request)
    {
        $todo = Todo::find;
        $todo->save();
        ($request->$id)->update(['content'=> $request->content]);

        return redirect('/');
    }

    public function delete(Request $id)
    {
        Todo::find($id)->delete();
        return redirect('/');
    }
}
