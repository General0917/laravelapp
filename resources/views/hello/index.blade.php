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

<body>
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
</body>
</html>
