@extends('layouts.master')

@section('navbar')
@parent

@stop

@section('content')

<h1>Data Mahasiswa ID : {{ $mahasiswa->id }} <a class="btn btn-small btn-success" href="{{ URL::to('dashboard') }}">Back</a></h1>

	<div class="jumbotron text-left">
		<p>
			<pre>
				<strong>Nama  			:</strong> {{ $mahasiswa->nama }}<br>
				<strong>Tempat lahir 		:</strong> {{ $mahasiswa->tempat_lahir }}<br>
				<strong>Tanggal lahir 		:</strong> {{ $mahasiswa->tanggal_lahir }}<br>
				<strong>angkatan 			:</strong> {{ $mahasiswa->angkatan }}<br>
				<strong>Status 			:</strong> {{ $mahasiswa->status }}<br>
				<strong>Agama 			:</strong> @if($mahasiswa->agama==0){{'Islam'}}@elseif($mahasiswa->agama==1){{'Kristen'}}@elseif($mahasiswa->agama==2){{'Budha'}}@elseif($mahasiswa->agama==3){{'Katolik'}}@elseif($mahasiswa->agama==4){{'Hindu'}}@elseif($mahasiswa->agama==5){{'Konghucu'}}@endif<br>
				<strong>Photo 			:</strong> <img src="{{asset('images/'.$mahasiswa->photo) }}"<br><br>				
				<strong>Alamat Sekarang 	:</strong> {{ $mahasiswa->alamat_sekarang }}<br>
				<strong>Alamat Asal 		:</strong> {{ $mahasiswa->alamat_asal }}<br>
				<strong>Kota Asal 			:</strong> {{ $mahasiswa->kota_asal }}<br>
				<strong>Dosen 			:</strong> {{ $mahasiswa->dosen->nama }}<br>
				<strong>Tanggal masuk 	:</strong> {{ $mahasiswa->tanggal_masuk }}<br>
				<strong>Jalur masuk 		:</strong> {{ $mahasiswa->jalur_masuk }}<br>
				<strong>Pt asal 			:</strong> {{ $mahasiswa->pt_asal }}<br>
				<strong>Prodi asal 		:</strong> {{ $mahasiswa->prodi_asal }}<br>
				<strong>Sks asal 			:</strong> {{ $mahasiswa->sks_asal }}<br>
				<strong>Nilai UN 			:</strong> {{ $mahasiswa->nilai_un }}<br>
				<strong>Sumber dana 		:</strong> {{ $mahasiswa->sumber_dana }}<br>
				<strong>Email 			:</strong> {{ $mahasiswa->email }}<br>
				<strong>No HP 			:</strong> {{ $mahasiswa->no_hp }}<br>
				<strong>Jenis Kelamin 		:</strong> @if($mahasiswa->jenis_kelamin==0){{'Perempuan'}}@else{{'Laki-Laki'}}@endif<br>
				<strong>Sekolah Asal 		:</strong> {{ $mahasiswa->sekolah_asal }}<br>
			</pre>
		</p>
	</div>

@stop