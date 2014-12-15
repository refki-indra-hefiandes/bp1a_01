@extends('layouts.master')
@section('content')

<div class="container">
<div class="col-md-5 col-md-offset-3">
<h2>Login</h2>
<hr/>

<!-- pesan login gagal-->
@if(Session::has('pesan_error'))
	<div class="alert alert-danger">{{ Session::get('pesan_error') }}</div>
@endif

<!--pesan berhasil logout-->
@if(Session::has('pesan'))
	<div  class="alert  alert-success">{{  Session::get('pesan') }}</div>
@endif

{{Form::open(array('action' => 'AdministratorController@authenticate')) }}
{{Form::label('email', 'Email') }}
{{Form::text('email', '', array('class' => 'form-control'))}}
{{Form::label('password', 'Password') }}
{{Form::password('password', array('class' => 'form-control'))}}
<br> 
{{Form::submit('Login', array('class' => 'btn btn-primary')) }}
&nbsp&nbsp&nbsp<a href="register">Create</a> 
{{Form::close() }}
</div>
</div>
@stop