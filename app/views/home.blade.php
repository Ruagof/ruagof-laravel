@extends('layout')

@section('content')
<h1>Welcome</h1>
<h2>Remote Monitoring System</h2>
<p>Check on your loved ones or your property when you cannot be there. Receive a text alert with image when there is unexpected activity in your home.</p>



{{ HTML::image('images/homepagemix.jpg', 'company logo', array('class' => 'img-responsive')) }}

@stop