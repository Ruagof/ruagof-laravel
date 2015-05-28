

@extends('layout')

@section('content')


    {{ Form::open(array('url'=>'logout', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Log Out</h2>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

 <p>You have now logged out. <a href="{{ URL::to('/login') }}"> Log In?</a> </p>
@stop

