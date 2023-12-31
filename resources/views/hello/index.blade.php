<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello/Index</title>
    <style>
        body { font-size: 16pt; color: #999; }
        h1 { font-size: 50pt; text-align: right; color: #f6f6f6; margin: -20px 0px -30px 0px; letter-spacing: -4pt; }
    </style>
</head>
{{-- <body>
    <h1>Blade/Index</h1>
    <p>{{$msg}}</p>
</body> --}}

{{-- <body>
    <h1>Blade/Index</h1>
    <p>{{$msg}}</p>
    <form method="post" action="/Practice/Laravel/laravelapp/public/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body> --}}

{{-- <body>
    <h1>Blade/Index</h1>
    @if ($id != '')
    <p>こんにちは、{{$pilot}}さん。</p>
    <p>Model Number={{$id}}</p>
    <p>NICK={{$nick}}</p>
    @else
    <p>GATシリーズの型式番号を数字で入力してください。</p>
    @endif
    <form method="post" action="/Practice/Laravel/laravelapp/public/hello">
        @csrf
        <input type="text" name="id">
        <input type="submit">
    </form>
</body> --}}

{{-- <body>
    <h1>Blade/Index</h1>
    @isset ($msg)
    <p>こんにちは、{{$msg}}さん。</p>
    @else
    <p>何か書いてください。</p>
    @endisset
    <form method="post" action="/Practice/Laravel/laravelapp/public/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body> --}}

{{-- <body>
    <h1>Blade/Index</h1>
    <p>&#64;foreachディレクティブの例</p>
    <ol>
        @foreach($data as $item)
    <li>{{$item}}
        @endforeach
    </ol>
</body> --}}

{{-- <body>
    <h1>Blade/Index</h1>
    <p>&#64;forディレクティブの例</p>
    <ol>
        @for ($i = 1; $i < 100; $i++)
        @if ($i % 2 == 1)
            @continue
        @elseif ($i <= 10)
        <li>No, {{$i}}
        @else
            @break
        @endif
        @endfor
    </ol>
</body> --}}

{{-- <body>
    <h1>Blade/Index</h1>
    <p>&#64;forディレクティブの例</p>
    @foreach ($data as $item)
    @if ($loop->first)
    <p>※データ一覧</p><ul>
    @endif
    <li>No,{{$loop->iteration}}. {{$item}}</li>
    @if ($loop->last)
    </ul><p>ーーここまで</p>
    @endif
    @endforeach
</body> --}}

{{-- <body>
    <h1>Blade/Index</h1>
    <p>&#64;whileディレクティブの例</p>
    <ol>
    @php
    $counter = 0;
    @endphp
    @while ($counter < count($data))
    <li>{{$data[$counter]}}</li>
    @php
    $counter++;
    @endphp
    @endwhile
    </ol>
</body> --}}

@extends('layouts.helloapp')
<style>
    .pagination { font-size: 10pt; }
    .pagination li { display: inline-block }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }
</style>

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    {{-- <p>ここが本文のコンテンツです。</p> --}}
    {{-- <p>必要なだけ記述できます。</p> --}}

    {{-- @component('components.message')
        @slot('msg_title')
        CAUTION!!<br />
        ここで「msg_title」の内容を定義しています。
        @endslot

        @slot('msg_content')
        これはメッセージの表示です。<br />
        ここで「msg_content」の内容を定義しています。
        @endslot
    @endcomponent --}}

    {{-- @include('components.message', ['msg_title'=>'OK', 'msg_content'=>'サブビューです。']) --}}

    {{-- <ul>
        @each('components.item', $data, 'item')
    </ul> --}}

    {{-- <p>Controller value<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'view_message' = {{$view_message}}</p> --}}

    {{-- <table>
        @foreach ($data as $item)
        <tr><th>GAT-X{{$item['model_num']}}</th> <td>{{$item['nick']}}</td> <td>{{$item['pilot']}}</td></tr>
        @endforeach
    </table> --}}

    {{-- <p>これは、<middleware>Google.com</middleware>へのリンクです。</p>
    <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p> --}}

    {{-- <p>{{$msg}}</p>
    <form method="post" action="/Practice/Laravel/laravelapp/public/hello">
        <table>
            @csrf
            <tr><th>name: </th><td><input type="text" name="name"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
            <tr><th>age: </th><td><input type="number" name="age"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form> --}}

    {{-- <p>{{$msg}}</p>
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="/Practice/Laravel/laravelapp/public/hello">
        <table>
            @csrf
            <tr><th>name: </th><td><input type="text" name="name"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
            <tr><th>age: </th><td><input type="number" name="age"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form> --}}

    {{-- <p>{{$msg}}</p>
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
    @endif
    <form method="post" action="/Practice/Laravel/laravelapp/public/hello">
        <table>
            @csrf
            @if ($errors->has('name'))
            <tr><th>ERROR: </th><td>{{$errors->first('name')}}</td></tr>
            @endif
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

            @if ($errors->has('mail'))
            <tr><th>ERROR: </th><td>{{$errors->first('mail')}}</td></tr>
            @endif
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>

            @if ($errors->has('age'))
            <tr><th>ERROR: </th><td>{{$errors->first('age')}}</td></tr>
            @endif
            <tr><th>age: </th><td><input type="number" name="age" value="{{old('age')}}"></td></tr>

            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form> --}}

    {{-- <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <p>入力に問題があります。再入力してください。</p>
    @endif
    <form method="post" action="/Practice/Laravel/laravelapp/public/hello">
        <table>
            @error('name')
                <tr><th>ERROR:</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

            @error('mail')
                <tr><th>ERROR: </th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>

            @error('age')
                <tr><th>ERROR: </th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>age: </th><td><input type="number" name="age" value="{{old('age')}}"></td></tr>

            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form> --}}

    {{-- <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <p>入力に問題があります。再入力してください。</p>
    @endif
    <form method="post" action="/Practice/Laravel/laravelapp/public/hello">
        <table>
            @csrf
            @if ($errors->has('msg'))
                <tr><th>ERROR: </th><td>{{$errors->first('msg')}}</td></tr>
            @endif
            <tr><th>Message: </th><td><input type="text" name="msg" value="{{old('msg')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form> --}}

    {{-- <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th><th>CreateDate</th><th>UpdateDate</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
            </tr>
        @endforeach
    </table> --}}

    {{-- <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table> --}}

    {{-- <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    {{ $items->links()}} --}}

    @if (Auth::check())
        <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
    @else
    <p>※ログインしていません。(<a href="/Practice/Laravel/laravelapp/public/login">ログイン</a> | <a href="/Practice/Laravel/laravelapp/public/register">登録</a>)</p>
    @endif

    <table>
        <tr>
            <th><a href="/Practice/Laravel/laravelapp/public/hello?sort=name">Name</a></th>
            <th><a href="/Practice/Laravel/laravelapp/public/hello?sort=mail">Mail</a></th>
            <th><a href="/Practice/Laravel/laravelapp/public/hello?sort=age">Age</a></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    {{-- linksメソッドにpaginationのbladeフォーマットを指定することで、レイアウトを指定することが可能 --}}
    {{-- {{ $items->appends(['sort' => $sort ])->links('vendor.pagination.bootstrap-4') }} --}}
    {{ $items->appends(['sort' => $sort ])->links('vendor.pagination.simple-bootstrap-4') }}
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
