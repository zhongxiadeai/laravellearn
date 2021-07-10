<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documt</title>
</head>
<body>
<form action="/tiezi" method="post">
    <input type="text" name="abc">
    {{csrf_field()}}
    <button>提交</button>
</form>
</body>
</html>