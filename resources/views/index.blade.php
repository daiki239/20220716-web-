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
  <form action="/add" method="POST">

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
</form>
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
                </form>
              </td>
           
              <td>
                <button class="button-update">更新</button>
                <form action="" method="post"> </form> 
              </td>
            <td>
                <input type="hidden" name="_token" value="">                <button class="button-delete">削除</button>
              </form>
             
            </td>
          </tr>
        <td>
         @extends('layouts.default')
<style>
  th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
    button {
      padding: 10px 20px;
      background-color: #289ADC;
      border: none;
      color: white;
    }




    
</style>
@section('title', 'add.blade.php')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/add" method="post">
  <table>
    @csrf
    <tr>
      <th>
        name
      </th>
      <td>
        <input type="text" name="name">
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        <input type="text" name="age">
      </td>
    </tr>
    <tr>
      <th>
        nationality
      </th>
      <td>
        <input type="text" name="nationality">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
  </table>
</form>
@endsection
          
        </td>
      </tr>
    </table>
  
    
  

 
</body>
</html>