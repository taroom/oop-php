<?php 
class kelasku {
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

//proses instance
$model = new kelasku();
$model->setKelas('Bunga Matahari', 2, 'aku cinta bunga');

//akses atribut (hanya berlaku untuk modifier public)
echo $model->nama;//muncul
echo $model->tingkat;//tidak muncul
echo $model->password;//tidak muncul