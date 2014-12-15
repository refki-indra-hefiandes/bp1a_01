<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mahasiswa', function($table)
		{
			$table->string('id', 10)->primary();
			$table->string('nama', 45);
			$table->string('tempat_lahir', 45);
			$table->date('tanggal_lahir');
			$table->date('angkatan');
			$table->string('status', 45);
			$table->integer('agama');
			$table->string('photo', 45);
			$table->text('alamat_sekarang');
			$table->text('alamat_asal');
			$table->string('kota_asal', 45);
			$table->string('dosen_id', 20);
			$table->date('tanggal_masuk');
			$table->string('jalur_masuk', 45);
			$table->string('pt_asal', 45);
			$table->string('prodi_asal', 45);
			$table->integer('sks_asal');
			$table->decimal('nilai_un');
			$table->string('sumber_dana', 45);
			$table->string('email', 45);
			$table->string('no_hp', 45);
			$table->integer('jenis_kelamin');
			$table->string('sekolah_asal', 64);
            $table->foreign('dosen_id')->references('id')->on('dosen')->onDelete('CASCADE');
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
		Schema::drop('mahasiswa');
	}

}
