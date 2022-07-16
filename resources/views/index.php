<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div clacc="todo list">
    <p class="listname">Todo List</p>
    <div clasas="todo">
      <form action="/todo/create" method="post" class="flex between mb-30">
          <input type="hidden" name="_token" value="I3PYeAzDlwjLlx0xsn0IMtU0QO5oM6Rxry38VoY8">          <input type="text" class="input-add" name="content">
          <input class="button-add" type="submit" value="追加">
        </form>
        <table>
          <tbody><tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
                    <tr>
            <td>
              2022-07-13 10:52:03
            </td>
            <form action="https://intense-reef-81125.herokuapp.com/todo/update?id=7754" method="post"></form>
              <input type="hidden" name="_token" value="I3PYeAzDlwjLlx0xsn0IMtU0QO5oM6Rxry38VoY8">              <td>
                <input type="text" class="input-update" value="hjkふぁs" name="content">
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            
            <td>
              <form action="https://intense-reef-81125.herokuapp.com/todo/delete?id=7754" method="post">
                <input type="hidden" name="_token" value="I3PYeAzDlwjLlx0xsn0IMtU0QO5oM6Rxry38VoY8">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                  </tbody></table>
    </div>
  </div>
</body>

</html>