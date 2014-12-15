<?php
	class Dosen extends Eloquent
	{
		protected $table='dosen';

		public function mahasiswa()
		{
			return $this->hasOne('Mahasiswa', 'dosen_id');
		}
	}
?>