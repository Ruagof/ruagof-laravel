@extends('layout')

@section('content')
<h3>this is your stream</h3>
<object type="text/html" data="http://192.168.0.105:8080" style="width:640px; height:480px">
    <p>The stream doesn't seem to be active right now.</p>
</object>
@stop