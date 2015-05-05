


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap-theme.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap-theme.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/main.css'); ?>" type="text/css">



</head>
<body>
<div class="container">
    {{ Form::open(array('url'=>'login', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Log In</h2>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

    {{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'Username')) }}
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}

    {{ Form::submit('Log In', array('class'=>'btn btn-large btn-primary btn-block'))}}
    {{ Form::close() }}
    </div>
</body>
</html>

