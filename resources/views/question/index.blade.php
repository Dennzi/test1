@extends('layouts.question')

<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
<form action="/question" method="post">
    @csrf
    <div class="submit">
    <input type="submit" value="編集画面" class="submit2">
    </div>
</form>

@section('sub_title', '~ よくある質問 ~')

@section('content')
    <table border="1">
    <tr><th class="a">ユーザーid</th><th>質問内容</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->user_id}}</td>
            <td>{{ $item->contents_of_question}}</td>
        </tr>
    @endforeach
    </table>
@endsection


