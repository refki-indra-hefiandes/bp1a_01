<?php
	class Mahasiswa extends Eloquent
	{
		protected $table='mahasiswa';

		public function dosen()
		{
			return $this->belongsTo('Dosen', 'dosen_id');
		}
	}
?>