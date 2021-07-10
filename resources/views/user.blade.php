<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php if (\Session::has('error')): ?>
<div class="alert alert-danger">
    <?php echo \Session::get('error') ?>
</div>
<?php endif;?>
<form action="/user-2" method="post">
    <input type="text" name="username" value="{{old('username')}}">
    <input type="text" name="password">
    {{csrf_field()}}
    <button>提交</button>
</form>
</body>
</html>