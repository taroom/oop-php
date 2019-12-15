<?php 
class kelasA {
	public $nama;
	protected $tingkat;
	private $password;

	public function setKelas($nama, $tingkat, $pass)
	{
		$this->nama = $nama;
		$this->tingkat = $tingkat;
		$this->password = $pass;
	}
}

class kelasB extends kelasA {
	
}


//proses instance
$model = new kelasB();
$model->setKelas('Bunga Matahari', 2, 'aku cinta bunga');

//akses atribut (hanya berlaku untuk modifier public)
echo $model->nama;//muncul
echo $model->tingkat;//tidak muncul
echo $model->password;//tidak muncul