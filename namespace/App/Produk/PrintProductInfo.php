<?php 

class PrintProductInfo{
	public $listProduct = [];

	public function addProduct(Produk $produk){
		$this->listProduct[] = $produk;
	}

	public function cetak(){
		$strInfo = "Daftar Produk : <br>";
		
		foreach ($this->listProduct as $prod) {
			$strInfo .= "- {$prod->getProductInfo()} <br>";
		}

		return $strInfo;
	}
}
