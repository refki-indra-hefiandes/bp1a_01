@extends('layouts.master') 

@section('content')

<div class="container"> <h2>Register</h2> 
	@if(Session::has('pesan'))

	<div  class="alert  alert-success">{{  Session::get('pesan') }}</div>

	@endif
	{{Form::open(array('action' => 'AdministratorController@store_user')) }} 
	{{Form::label('firstname', 'First Name') }} 
	{{Form::text('firstname',  '',  array('class'  =>  'form-control'))}} 
	
	{{Form::label('lastname', 'Last Name') }}
	{{Form::text('lastname', '', array('class' => 'form-control'))}}

	{{Form::label('email', 'Email') }} 
	{{Form::text('email', '', array('class' => 'form-control'))}} 

	{{Form::label('password', 'Password') }} 
	{{Form::password('password',  array('class'  =>  'form-control'))}} 
	<br> 
	{{Form::submit('Register',  array('class'  =>  'btn  btn-primary')) }} 
	&nbsp&nbsp&nbsp<a href="login">Login</a>
	{{ Form::close() }} 
</div> 
@stop 