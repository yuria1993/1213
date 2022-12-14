<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/laravel_todolist.css')}}">
  <title>Todo List</title>
</head>

<body>
  <h1 class="list_title">Todo List</h1>
<div class="list_table">


<form method="get" action="/">
  @csrf
</form>

<form method="POST" action="/create">
 <input type="text" value=""name="content">
  <input type="submit" value="追加">
</form>

<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>


@if(@isset($todo))
<table>
  <tr>

    <th>作成日</th>
    <td>{{$todo->created_at}}</td>

    <th>タスク名</th>
    <td>{{$todo->content}}</td>

    <th>更新</th>
     <td>{{$todo->id}}></td>
     <form method="POST" action="/update">
  @csrf
  <input type="submit" name="update" value="更新">
</form>

    <th>削除</th>
    <td>{{$todo->id}}</td>
    <form method="POST" action="/delete">
  @csrf
  <input type="submit" name="delete" value="削除">
</form>
  </tr>
@endif


</table>







</div>  
</body>
</html>