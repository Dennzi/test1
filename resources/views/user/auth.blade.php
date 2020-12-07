@extends('layouts.user')

<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">

@section('sub_title', '新規アカウント作成')

@section('content')
  <form action="/auth/post" method="post">
    @csrf
    <input type="text" name="user_name" placeholder="ユーザー名" autofocus><br>
    <input type="email" name="user_mail" placeholder="メールアドレス"><br>
    <input type="text" name="user_id" placeholder="ID"><br>
    <select name="country_code" class="form-control">
      <option value="" hidden>出身国</option>
      <option value="アメリカ">アメリカ</option>
      <option value="日本">日本</option>
      <option value="中国">中国</option>
    </select><br>
    <select name="language_code" class="form-control">
      <option value="" hidden>使用言語</option>
      <option value="英語">英語</option>
      <option value="日本語">日本語</option>
      <option value="中国語">中国語</option>
    </select><br>
    <span class="pass">パスワード</span><span class="re">確認</span><br>
    <input type="password" name="user_password" class="password">
    <input type="password" name="user_password2" class="password2"><div class="me"></div><br>
    <span>※半角数字８文字以上で、入力して下さい。</span><br>
    <input type="submit" value="作成" class="button">
  </form>
@endsection


