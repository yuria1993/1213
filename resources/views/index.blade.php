<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
</head>

<body>
  <h1>Todo List</h1>
<div class="list_table">


<form method="POST" action="/create">
  @csrf

  <input type="text" value=""name="content">
  <input type="submit" value="追加">
</form>

<table>
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>

  @foreach($todos as $todo)
  <td>{{$todo->datatime}}</td>
  <td>{{$todo->content}}</td>
  <td><a href="/update/{{$todo->id}}">更新</a></td>
  <td><a href="/delete/{{$todo->id}}">削除</a></td>
</tr>
@endforeach

<form method="POST" action="/update">
  @csrf
  <input type="submit" name="update" value="更新">
</form>

<form method="POST" action="/delete">
  @csrf
  <input type="submit" name="delete" value="削除">
</form>
</table>
</div>  
</body>
</html>