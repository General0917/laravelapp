@extends('layouts.helloapp')

@section('title', 'Person.find')

@section('menubar')
    @parent
    検索ページ
@endsection

@section('content')
    <form method="post" action="/Practice/Laravel/laravelapp/public/person/find">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="submit" value="find">
    </form>
    @if (isset($item))
        <table>
            <tr><th>Date</th></tr>
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        </table>
    @endif
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
