@extends('layouts.master')

@section('navbar')
@parent

@stop

@section('content')

<h1>Edit Data Mahasiwa</h1>

<!-- notifikasi error -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($mahasiswa, array('route' => array('file.update',  $mahasiswa->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}

	<div class="form-group">
		{{ Form::label('nama', 'Nama') }}
		{{ Form::text('nama', Input::old('nama'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('tempat_lahir', 'Tempat Lahir') }}
		{{ Form::text('tempat_lahir', Input::old('tempat_lahir'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('tanggal_lahir', 'Tanggal Lahir') }}
		{{ Form::input('date','tanggal_lahir', Input::old('tanggal_lahir'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('angkatan', 'Angkatan') }}
		{{ Form::selectYear('angkatan', 2010, 2015, Input::old('angkatan'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('status', 'Status') }}
		{{ Form::text('status', Input::old('status'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('agama', 'Agama') }}
		{{ Form::select('agama', array('0' => 'Islam', '1' => 'Kristen', '2' => 'Budha', '3' => 'Katolik', '4' => 'Hindu', '5' => 'Konghucu'), Input::old('agama'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('file','Upload Foto') }}
		{{ Form::file('photo', Input::old('photo'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{Form::label('alamat_sekarang', 'Alamat sekarang') }}
 		{{Form::textarea('alamat_sekarang', Input::old('alamat_sekarang'), array('class' => 'form-control'))}}
 	</div>
 	<div class="form-group">
		{{Form::label('alamat_asal', 'Alamat_asal') }}
 		{{Form::textarea('alamat_asal', Input::old('alamat_asal'), array('class' => 'form-control'))}}
 	</div>
 	<div class="form-group">
		{{ Form::label('kota_asal', 'Kota asal') }}
		{{ Form::text('kota_asal', Input::old('kota_asal'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('dosen_id', 'Dosen') }}		
		{{ Form::text('dosen_id', Input::old('dosen_id'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('tanggal_masuk', 'Tanggal masuk') }}
		{{ Form::input('date','tanggal_masuk', Input::old('tanggal_masuk'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('jalur_masuk', 'Jalur masuk') }}
		{{ Form::text('jalur_masuk', Input::old('jalur_masuk'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('pt_asal', 'pt asal') }}
		{{ Form::text('pt_asal', Input::old('pt_asal'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('prodi_asal', 'Prodi asal') }}
		{{ Form::text('prodi_asal', Input::old('prodi_asal'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('sks_asal', 'Sks asal') }}
		{{ Form::text('sks_asal', Input::old('sks_asal'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('nilai_un', 'Nilai un') }}
		{{ Form::text('nilai_un', Input::old('nilai_un'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('sumber_dana', 'Sumber dana') }}
		{{ Form::text('sumber_dana', Input::old('sumber_dana'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('no_hp', 'No hp') }}
		{{ Form::text('no_hp', Input::old('no_hp'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('jenis_kelamin', 'Jenis kelamin') }}
		{{ Form::select('jenis_kelamin', array('0' => 'Permpuan', '1' => 'Laki-Laki'), Input::old('jenis_kelamin'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('sekolah_asal', 'Sekolah asal') }}
		{{ Form::text('sekolah_asal', Input::old('sekolah_asal'), array('class' => 'form-control')) }}
	</div>
	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
	<a class="btn btn-small btn-info" href="{{ URL::to('dashboard') }}">Cancel</a>

{{ Form::close() }}

@stop