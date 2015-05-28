@extends('layout')

@section('content')


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
@stop

