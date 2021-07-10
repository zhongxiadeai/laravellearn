<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
@include('layouts/header')

<h1>{{$username or '游客'}}</h1>
<h2>{{$title}}</h2>
<p>{{date('Y-m-d H:i:s')}}</p>
<p>{{$content}}</p>
<p>{!! $pages !!}</p>

@include('layouts/footer')
</body>
</html>