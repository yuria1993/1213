<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all;
        return view('index.blade',["todos"=>$todos]);
    }
}
