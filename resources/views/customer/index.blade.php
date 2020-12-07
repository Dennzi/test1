@extends('layouts.customer')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">


@section('content')
    <table border="2">
    <tr><th>id</th><th>顧客者名</th><th>メールアドレス</th><th>出身国</th><th>使用言語</th><th>パスワード</th><th>登録日</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->user_id}}</td>
            <td>{{ $item->user_name}}</td>
            <td>{{ $item->user_mail}}</td>
            <td>@if ($item->country != null)
                        {{ $item->country->getData()}}
                @endif
            </td>
            <td>@if ($item->language != null)
                        {{ $item->language->getData()}}
                @endif
            </td>
            <td>{{ $item->user_password}}</td>
            <td>{{ $item->user_date}}</td>
        </tr>
    @endforeach
@endsection

