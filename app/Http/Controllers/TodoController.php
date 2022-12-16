<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use Validator;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = Todo::all();
        return view('index', ['todos'=>$todos]);
        $error = [
            'content' => 'required|string|max:20',
        ];
        $messages = [
            'content.required|string|max:20' => '20文字以内で入力してください'
        ];
        $validator = $validator::make($request->all(),$error,$messages);

        if($validator->fails()){
            $msg = '20文字以内で入力してください';
            return redirect('/',['msg'=>$msg])
            ->withErrors($validator)
            ->withInput();
        }
        return view('/',);
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
