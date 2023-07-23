@extends('layouts.helloapp')

@section('title', 'ユーザー認証')

@section('menubar')
    @parent
    ユーザー認証
@endsection

@section('content')
<p>{{$message}}</p>
    <form method="post" action="/Practice/Laravel/laravelapp/public/hello/auth">
        <table>
            @csrf
            <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
            <tr><th>pass: </th><td><input type="password" name="password"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>

    <form method="get" action="/Practice/Laravel/laravelapp/public/hello/auth/logout">
        @if ($flag)
            <tr><td><input type="submit" value="ログアウト"></td></tr>
        @endif
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
