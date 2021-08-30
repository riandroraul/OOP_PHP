<?php 

class Produk{
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

class printProductInfo{

	public function cetak(Produk $produk){
	//$produk menerima argumen berupa object 
	// Produk $produk hanya menerima object dari instansiasi class Produk
		$strInfo = "{$produk->judul}, {$produk->getLabel()}, (Rp. $produk->harga)";
		return $strInfo;
	}
}


$produk1 = new Produk("Resident Evil", "James Brian", "Capcom", 250000);
$produk2 = new Produk("Doraemon", "Fujiko F Fujio", "Shogakukan", 35000);
$produk3 = new Produk("Dragon ball", "Akira Toriyama", "Elexmedia", 38000);


echo 'Game : '. $produk1->getLabel();
echo "<hr>";
echo 'Komik : '. $produk2->getLabel();
echo "<hr>";


$cetakProduk1 = new printProductInfo();

echo $cetakProduk1->cetak($produk2);


