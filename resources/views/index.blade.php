<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="{{asset('/css/laravel_todolist.css')}}">
  <title>Todo List</title>
</head>

<body>
  <div class="container">
    <div class="content">
  <h1 class="list_title">Todo List</h1>
<div class="list_table">


<form method="POST" action="/create" class="new-content">
  @csrf
  
 <input type="text"  size="40" value="" name="content">
  <input type="submit" value="追加" class="create_button">
</form>

@if($errors->any())
<div class="error_content">
  <ul>
    20文字以上は入力できません

</ul>
</div>
@endif


  <table>
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>

    @foreach($todos as $todo)
    <tr>
      <td>{{ $todo->created_at }}</td>
      <form method="POST" action="/update">
          @csrf
        <td>
          <input type="text"  size="30" name="content" value="{{ $todo->content }}">
        </td>
        <td>
            <input type="hidden" name="id" value="{{ $todo->id }}">
            <input type="submit" name="update" value="更新" class="update_button">
        </td>
      </form>
      <td>
        <form method="POST" action="/delete">
          @csrf
          <input type="hidden" name="id" value="{{ $todo->id }}">
          <input type="submit" name="delete" value="削除" class="delete_button">
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</div>
</div>  
</div>
</body>
</html>