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
  <input type="text" value="{{$todo->content}}"name="content">
  <input type="submit" value="追加">
<table>
  <tr>
    <th>更新日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>

  @foreach($todos as $todo)
  <tr>
    <td>{{$todo->datastump}}</td>
    <td>{{$todo->content}}</td>
    <td><a href="/update-page/{{$todo-.id}}">更新</a></td>
    <td><a href="/delate-page/{{$todo->id}}">削除</a></td>
</tr>
@endforeach
</table>
</div>  
</body>
</html>