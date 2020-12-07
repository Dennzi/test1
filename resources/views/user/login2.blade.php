@extends('layouts.login')

@section('sub_title', 'ログイン')

@section('content')
  <form action="/login2/postAuth" method="post">
    @csrf
    <input type="text" name="user_id" placeholder="ID" autofocus><br>
    <input type="password" name="user_password" placeholder="パスワード"><br>
    </table>
    <input type="submit" value="ログイン" class="button"><br>
  </form>

  <form action="/login2/" method="post">
    <input type="submit" value="パスワードをお忘れですか？" class="button2">
  </form>
@endsection

