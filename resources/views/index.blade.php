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

</form>


@if(@isset($todo))
<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>

  
  <td>{{$todo->created_at}}</td>
  <td>{{$todo->content}}</td>
  <td>{{$todo->id}}></td>
  <td>{{$todo->id}}</td>
</tr>
@endif


</table>

<form method="POST" action="/update">
  @csrf
  <input type="submit" name="update" value="更新">
</form>

<form method="POST" action="/delete">
  @csrf
  <input type="submit" name="delete" value="削除">
</form>



</div>  
</body>
</html>