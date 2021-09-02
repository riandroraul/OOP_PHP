<?php 

class Game extends Produk implements InfoProduk{
	public $jamMain;

	public function __construct($judul, $penulis, $penerbit, $harga, $jamMain){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jamMain = $jamMain;
	}

	public function getInfo(){
		$str = "{$this->judul}, {$this->getLabel()}, (Rp. {$this->harga}) ";
		return $str;
	}

	public function getProductInfo(){
		$str = "Game : {$this->getInfo()} ~ {$this->jamMain} Jam";
		return $str;
	}
	
}