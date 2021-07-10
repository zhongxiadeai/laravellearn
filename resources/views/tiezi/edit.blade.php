<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改</title>
</head>
<body>
<h2>修改</h2>
<form action="/tiezi/30" method="post">
    <input type="text" name="abc">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <button>提交</button>
</form>

<h2>删除</h2>
<form action="/tiezi/30" method="post">
    <input type="text" name="abc">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button>提交</button>
</form>
</body>
</html>