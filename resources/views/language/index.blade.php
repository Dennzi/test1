@extends('layouts.helloapp')

@section('title', 'Company.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
    <tr><th>言語コード</th><th>言語</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->language_code}}</td>
            <td>{{ $item->language}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyrigt 2020
@endsection