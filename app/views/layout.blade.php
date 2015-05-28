<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ruagof</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap-theme.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap-theme.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/main.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/navbar.css'); ?>" type="text/css">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="<?php echo asset('js/bootstrap.js'); ?>" type="javascript/js">
    <link rel="stylesheet" href="<?php echo asset('js/bootstrap.min.js'); ?>" type="javascript/js">
    <link rel="stylesheet" href="<?php echo asset('js/npm.js'); ?>" type="javascript/js">


</head>

<body>
<div class="container">
        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">Ruagof</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                       <!-- <li class="active"><a href="#">Home</a></li>-->
                        <li><a href="./about">About</a></li>
                        <li><a href="./stream">Stream</a></li>
                        <li><a href="./sample">Sample</a></li>
                        <li><a href="./register">Register</a></li>
                        <li><a href="./login">Login</a></li>
                        <li><a href="./logout">Logout</a></li>
                        <li><a href="./help">Help</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>



        @yield('content')



</div>





</body>
</html>