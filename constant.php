<?php 

class Coba{
	public const NAMA = "Ignasius"; 
	// public define(UMUR, 30);
	public $kelas = __CLASS__;
	public function test(){
		return __FUNCTION__;
	}
}


echo Coba::NAMA;
echo '<br>';

$obj1 = new Coba();
echo $obj1->kelas;
echo '<br>';
echo $obj1->test();

echo '<br>';
// magic constant php
echo __DIR__;
echo '<br>';


echo __LINE__;


