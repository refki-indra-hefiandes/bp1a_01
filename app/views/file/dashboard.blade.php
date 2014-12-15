@extends('layouts.master')

@section('content')

<nav  class="navbar  navbar-inverse  navbar-static-top" 
role="navigation">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display 
-->
<div class="navbar-header">
<button  type="button"  class="navbar-toggle"  datatoggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span> 
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Welcome</a>
</div>
<!--  Collect  the  nav  links,  forms,  and  other  content  for 
toggling -->
<div  class="collapse  navbar-collapse"  id="bs-examplenavbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li><a  href="logout"><i  class="glyphicon  glyphicon-off"></i>logout</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<div class="container"> 
<h1>Data Mahasiswa</h1>
<!-- notifikasi messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<a class="btn btn-small btn-success" href="{{ URL::to('create_mhs') }}">Input</a>
<table class="table table-striped table-bordered" style="margin-top:5px;">
	<thead>
		<tr>
			<td>ID Mhs</td>
			<td>Nama</td>
			<td>Tempat lahir</td>
			<td>Tanggal lahir</td>
			<td>Jenis kelamin</td>
			<td>Angkatan</td>
			<td>Status</td>
			<td>Agama</td>
			<td>Dosen</td>
			<td width="18%">Aksi</td>
		</tr>
	</thead>
	<tbody>
	@foreach($mahasiswa as $key => $mahasiswa)
	<tr>
			<td>{{ $mahasiswa->id }}</td>
			<td>{{ $mahasiswa->nama }}</td>
			<td>{{ $mahasiswa->tempat_lahir }}</td>
			<td>{{ $mahasiswa->tanggal_lahir }}</td>
			<td>@if($mahasiswa->jenis_kelamin==0){{'Perempuan'}}@else{{'Laki-Laki'}}
				@endif</td>
			<td>{{ $mahasiswa->angkatan }}</td>
			<td>{{ $mahasiswa->status }}</td>
			<td>@if($mahasiswa->agama==0){{'Islam'}}
			    @elseif($mahasiswa->agama==1){{'Kristen'}}
			    @elseif($mahasiswa->agama==2){{'Budha'}}
			    @elseif($mahasiswa->agama==3){{'Katolik'}}
			    @elseif($mahasiswa->agama==4){{'Hindu'}}
			    @elseif($mahasiswa->agama==5){{'Konghucu'}}
			    @endif</td>
			<td>{{ $mahasiswa->dosen->nama }}</td>

			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('file.destroy', $mahasiswa->id))) }}
                	<a class="pull-right" onclick="if (!confirm('Anda Yakin Akan Menghapus Data ini ??')) 
                	{
                    	return false;
                	};">
                	{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}</a>
                {{ Form::close() }}
                <a class="btn btn-small btn-success" href="{{ URL::to('file/' .$mahasiswa->id) }}">Detil</a>
				<a class="btn btn-small btn-info" href="{{ URL::to('file/' .$mahasiswa->id. '/edit') }}">Edit</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
</div>
@stop