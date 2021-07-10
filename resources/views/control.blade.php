<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>控制</title>
</head>
<body>
    <h2>流程控制</h2>
    @if($isVip)
        <span style="color: red">VIP</span>
    @endif
    <h2>循环控制</h2>
    <h2>选择题</h2>
    软件S19-13班最帅的男生
    <ul>
        @foreach($classmates as $v)
        <li>{{$v}} <input type="radio" name="boy"></li>
        @endforeach
    </ul>
</body>
</html>