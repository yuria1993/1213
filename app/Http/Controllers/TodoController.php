<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = Todo::all();
        return view('index',["todos" => $todos]);
        
    }

    public function create()
    {
        return view('index');
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
