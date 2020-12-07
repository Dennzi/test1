@extends('layouts.helloapp')

@section('title', 'Company.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
    <tr><th>user_id</th><th>user_name</th><th>user_mail</th><th>user_date</th><th>user_password</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->user_id}}</td>
            <td>{{ $item->user_name}}</td>
            <td>{{ $item->user_mail}}</td>
            <td>{{ $item->user_date}}</td>
            <td>{{ $item->user_password}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyrigt 2020
@endsection