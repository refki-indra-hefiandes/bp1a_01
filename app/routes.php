<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('file', 'AdministratorController');
Route::get('register', 'AdministratorController@register'); 
Route::post('store_user', 'AdministratorController@store_user');
Route::get('login',  array('as'=>'masuk','uses'=> 'AdministratorController@login'));
Route::post('authenticate','AdministratorController@authenticate');
Route::get('logout',array('before'=>'auth','uses'=> 'AdministratorController@logout'));
Route::get('dashboard', array('before'=>'auth','uses'=>'AdministratorController@index'));
Route::get('create_mhs', 'AdministratorController@create_mhs');
Route::post('store_mhs', 'AdministratorController@store_mhs');
Route::post('show', 'AdministratorController@show_mhs');
Route::get('edit', 'AdministratorController@edit');
Route::post('update','AdministratorController@update');
Route::post('destroy', 'AdministratorController@destroy');







































Route::get('tampil', function()
{
    $mahasiswa = Mahasiswa::all();

    foreach($mahasiswa as $mahasiswa)
    {
        echo 'Id Dosen :'.$mahasiswa->dosen->id.'<br>';
        echo 'memiliki mahasiswa:<br>';
        echo $mahasiswa->id.'<br>';
        echo $mahasiswa->nama.'<br>';
    }
});
