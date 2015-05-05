


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
    {{ Form::open(array('url'=>'logout', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Log Out</h2>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

 <p>You have now logged out. <a href="{{ URL::to('/login') }}"> Log In?</a> </p>
    </div>
</body>
</html>

