@extends('layout')

@section('title')
    Ltweb2015
@stop

@section('custom-styles')
    <link rel="stylesheet" href="{{asset('css/register_style.css')}}">
@stop

@section('content')
    <div id="register">
        <h1>Register Information</h1>
        <div id="errors">
            <?php
            foreach ($errors as $error) {
            echo "<div class='error'> $error </div>";
            }
            ?>
        </div>
        {{ Form::open(['url' => 'register', 'method' => 'post']) }}
        {{ Form::label('username', 'UserName') }}
        {{ Form::text('username', $username, ['required' => '','class' => 'form-control']) }}
        {{ Form::label('password', 'Enter Password') }}
        {{ Form::password('password', ['required' => '','class' => 'form-control']) }}
        {{ Form::label('re-password', 'Re-Enter Password') }}
        {{ Form::password('re-password', ['class' => 'form-control']) }}
        {{ Form::submit('Register', ['required' => '','class' => 'btn btn-primary btn-register']) }}
        {{ Form::close() }}
    </div>
@stop

@section('custom-scripts')
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
@stop        
            
