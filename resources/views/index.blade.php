<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>

  <p>{{$txt}}</p>
  @if (count($errors) > 0)
    <p>入力に問題があります</p>
  @endif
  <form action="/task" method="POST">
    {{csrf_field()}}
    <table>
      @csrf
      @error('name')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
     
      <tr>
        <td>
          @csrf
          <input type="text" name="name">
          <input class="button-add" type="submit" value="追加">
        </td>
      </tr>
      
     <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
      <tr>
        <tr>
            <td>
              2022-07-16 04:16:02
            </td>
            <form action="" method="post"></form>
              <input type="hidden" name="_token" value="">              <td>
                <input type="text" class="input-update" value="" name="content">
              </td>
               {{--
              <td>
                <button class="button-update">更新</button>
                <form action="" method="post">
              </td>
            <td>
                <input type="hidden" name="_token" value="">                <button class="button-delete">削除</button>
              </form>
               --}}
            </td>
          </tr>
        <td>
         
          
        </td>
      </tr>
    </table>
  
  </form>

  </form>
</body>
</html>