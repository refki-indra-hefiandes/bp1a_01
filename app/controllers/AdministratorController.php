<?php

class AdministratorController extends \BaseController {

	public function register()
	{
		return View::make('file.register');
	}


	public function store_user()
	{
		$user = new User(); 
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
		return  Redirect::to('register')->with('pesan',  'Registrasi berhasil!');
	}


	public function login()
	{
		return View::make('file.login');
	}


	public function authenticate()
	{
		if  (Auth::attempt(array('email'  =>  Input::get('email'), 'password' => Input::get('password'))))
		{
			return Redirect::to('dashboard');
		}
		else{
			return  Redirect::to('login')->with('pesan_error', 'Login gagal, email atau password salah');
		}

	}


	public function logout()
	{
		Auth::logout();
		return Redirect::to('login')->with('pesan', 'berhasil logout');
	}


	public function index()
	{
		$mahasiswa = Mahasiswa::all();
		return View::make('file.dashboard')->with('mahasiswa', $mahasiswa);
	}


	public function create_mhs()
	{		
		foreach (Dosen::select('id', 'nama')->orderBy('id','asc')->get() as $exdos)
		{
			$dosen[$exdos->id] = $exdos->nama;
		}
		return View::make('file.create')->with('dosen', $dosen);
	}


	public function store_mhs()
	{
		$rules = array(
			'id'   => 'required|unique:mahasiswa,id',
			'nama'   => 'required',
			'tempat_lahir'   => 'required',
			'tanggal_lahir'   => 'required',
			'angkatan'   => 'required',
			'status'   => 'required',
			'agama'   => 'required',
			'photo'   => 'required',
			'alamat_sekarang' => 'required',
			'alamat_asal' => 'required',
			'kota_asal' => 'required',
			'dosen_id'   => 'unique:mahasiswa,dosen_id',
			'tanggal_masuk' => 'required',
			'jalur_masuk' => 'required',
			'pt_asal'   => 'required',
			'prodi_asal'   => 'required',
			'sks_asal'   => 'required',
			'nilai_un'   => 'required|numeric',
			'sumber_dana'   => 'required',
			'email'   => 'required|email',
			'no_hp'   => 'required',
			'jenis_kelamin'   => 'required',
			'sekolah_asal'   => 'required'	
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) 
		{
			return Redirect::to('create_mhs')->withErrors($validator)->withInput();
		} 
		else 
		{
			$image = 'public/images/';
			$filename = Input::file('photo')->getClientOriginalName();
			$mahasiswa = new Mahasiswa;
			$mahasiswa->id   = Input::get('id');
			$mahasiswa->nama   = Input::get('nama');
			$mahasiswa->tempat_lahir   = Input::get('tempat_lahir');
			$mahasiswa->tanggal_lahir   = Input::get('tanggal_lahir');
			$mahasiswa->angkatan   = Input::get('angkatan');
			$mahasiswa->status   = Input::get('status');
			$mahasiswa->agama   = Input::get('agama');
			$mahasiswa->photo   = $filename;
			$mahasiswa->alamat_sekarang   = Input::get('alamat_sekarang');
			$mahasiswa->alamat_asal   = Input::get('alamat_asal');
			$mahasiswa->kota_asal   = Input::get('kota_asal');
			$mahasiswa->dosen_id   = Input::get('dosen_id');
			$mahasiswa->tanggal_masuk   = Input::get('tanggal_masuk');
			$mahasiswa->jalur_masuk   = Input::get('jalur_masuk');
			$mahasiswa->pt_asal   = Input::get('pt_asal');
			$mahasiswa->prodi_asal   = Input::get('prodi_asal');
			$mahasiswa->sks_asal   = Input::get('sks_asal');
			$mahasiswa->nilai_un   = Input::get('nilai_un');
			$mahasiswa->sumber_dana   = Input::get('sumber_dana');
			$mahasiswa->email   = Input::get('email');
			$mahasiswa->no_hp   = Input::get('no_hp');
			$mahasiswa->jenis_kelamin   = Input::get('jenis_kelamin');
			$mahasiswa->sekolah_asal   = Input::get('sekolah_asal');
			$mahasiswa->save();

			Input::file('photo')->move($image,$filename);
			Session::flash('message', 'berhasil input data');
			return Redirect::to('dashboard');
		}
	}


	public function show($id)
	{
		$mahasiswa = Mahasiswa::find($id);
		return View::make('file.show')->with('mahasiswa', $mahasiswa);
	}


	public function edit($id)
	{
		$mahasiswa = Mahasiswa::find($id);
		return View::make('file.edit')->with('mahasiswa', $mahasiswa);
	}


	public function update($id)
	{
		$rules = array(
			'nama'   => 'required',
			'tempat_lahir'   => 'required',
			'tanggal_lahir'   => 'required',
			'angkatan'   => 'required',
			'status'   => 'required',
			'agama'   => 'required',
			'photo'   => 'required',
			'alamat_sekarang' => 'required',
			'alamat_asal' => 'required',
			'kota_asal' => 'required',
			'dosen_id'   => 'required',
			'tanggal_masuk' => 'required',
			'jalur_masuk' => 'required',
			'pt_asal'   => 'required',
			'prodi_asal'   => 'required',
			'sks_asal'   => 'required',
			'nilai_un'   => 'required|numeric',
			'sumber_dana'   => 'required',
			'email'   => 'required|email',
			'no_hp'   => 'required',
			'jenis_kelamin'   => 'required',
			'sekolah_asal'   => 'required'	
		);

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) 
		{
			return Redirect::to('file/' .$id. '/edit')->withErrors($validator)->withInput();
		} 
		else 
		{
			$image = 'public/images/';
			$filename = Input::file('photo')->getClientOriginalName();


			$mahasiswa = Mahasiswa::find($id);
			$mahasiswa->nama   = Input::get('nama');
			$mahasiswa->tempat_lahir   = Input::get('tempat_lahir');
			$mahasiswa->tanggal_lahir   = Input::get('tanggal_lahir');
			$mahasiswa->angkatan   = Input::get('angkatan');
			$mahasiswa->status   = Input::get('status');
			$mahasiswa->agama   = Input::get('agama');
			$mahasiswa->photo   = $filename;
			$mahasiswa->alamat_sekarang   = Input::get('alamat_sekarang');
			$mahasiswa->alamat_asal   = Input::get('alamat_asal');
			$mahasiswa->kota_asal   = Input::get('kota_asal');
			$mahasiswa->dosen_id   = Input::get('dosen_id');
			$mahasiswa->tanggal_masuk   = Input::get('tanggal_masuk');
			$mahasiswa->jalur_masuk   = Input::get('jalur_masuk');
			$mahasiswa->pt_asal   = Input::get('pt_asal');
			$mahasiswa->prodi_asal   = Input::get('prodi_asal');
			$mahasiswa->sks_asal   = Input::get('sks_asal');
			$mahasiswa->nilai_un   = Input::get('nilai_un');
			$mahasiswa->sumber_dana   = Input::get('sumber_dana');
			$mahasiswa->email   = Input::get('email');
			$mahasiswa->no_hp   = Input::get('no_hp');
			$mahasiswa->jenis_kelamin   = Input::get('jenis_kelamin');
			$mahasiswa->sekolah_asal   = Input::get('sekolah_asal');
			$mahasiswa->save();

			Input::file('photo')->move($image,$filename);
			Session::flash('message', 'berhasil update data');
			return Redirect::to('dashboard');
		}
	}


	public function destroy($id)
	{
		$mahasiswa = Mahasiswa::find($id);
		$delete = File::delete('public/images/'.$mahasiswa->photo);
		$mahasiswa->delete();
		return Redirect::to('dashboard');
	}

}
