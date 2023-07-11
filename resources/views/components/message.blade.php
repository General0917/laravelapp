<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <style>
        .message { border: double 4px #ccc; margin: 10px; padding: 10px; background-color: #fafafa; }
        .msg_title { margin: 10px 20px; color: #999; font-size: 16pt; font-weight: bold; }
        .msg_content { margin: 10px 20px; color: #aaa; font-size: 12pt; }
    </style>
</head>
<body>
    <div class="message">
        <p class="msg_title">{{$msg_title}}</p>
        <p class="msg_content">{{$msg_content}}</p>
    </div>
</body>
</html>
