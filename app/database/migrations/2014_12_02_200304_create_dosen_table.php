<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dosen', function($table)
		{
			$table->string('id', 20)->primary();
			$table->string('nama', 45);
			$table->string('tempat_lahir', 45);
			$table->date('tanggal_lahir');
			$table->integer('jenis_kelamin');
			$table->text('alamat');
			$table->integer('agama');
			$table->integer('status_perkawinan');
			$table->string('email', 45);
			$table->string('no_telp', 45);
			$table->date('tahun_masuk');
			$table->string('no_ktp', 45);
			$table->string('photo', 45);
			$table->string('bank', 45);
			$table->string('no_rek', 45);
			$table->string('no_sertifikasi', 45);
			$table->date('tahun_sertifikasi');
			$table->string('file_sertifikasi', 45);
			$table->string('no_npwp', 45);
			$table->string('file_npwp', 45);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dosen');
	}

}
