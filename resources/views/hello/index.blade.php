@extends('layouts.user')

@section('content')
@if (Auth::check())
<p>USER: {{$user->user_name . ' (' . $user->user_mail . ')'}}</p>
@else
<P>ログインできません(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
@endif
@endsection