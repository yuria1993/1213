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

  @if(count($errors)>0)
  <ul>
    @foreach(@errors->all()as$error)
    <li>{{error}}</li>
  @endif

  <form action="/create" method=post>
    <table>
      @csrf
      <tr>
        <th>作成日</th>
        <td><input type="data" name="data"></td>
      </tr>
      <tr>
        <th>タスク名</th>
        <td><input type="text" name="content"></td>
      </tr>
      <tr>
        <th>更新</th>
        <td><input type="submit" name="update"></td>
      </tr>
      <tr>
        <th>削除</th>
        <td><input type="submit" name="delete"></td>
</table>
</form>
</div>  
</body>
</html>