<?php 

class Produk{
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlHalaman,
	       $jamMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jamMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->jamMain = $jamMain;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getProductInfo(){
		// "Resident Evil", "James Brian", "Capcom", 250000
		$str = "{$this->judul}, {$this->getLabel()}, (Rp. {$this->harga}) ";
		return $str;
	}

}

class Komik extends Produk{
	public function getProductInfo(){
		$str = "Komik : {$this->judul}, {$this->getLabel()}, (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
		return $str;
	}
}

class Game extends Produk{
	public function getProductInfo(){
		$str = "Game : {$this->judul}, {$this->getLabel()}, (Rp. {$this->harga}) ~ {$this->jamMain} Jam";
		return $str;
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


$produk1 = new Game("Resident Evil", "James Brian", "Capcom", 250000, 0, 50, "Game");
$produk2 = new Komik("Doraemon", "Fujiko F Fujio", "Shogakukan", 35000, 100, 0, "Komik");
$produk3 = new Komik("Dragon ball", "Akira Toriyama", "Elexmedia", 38000, 200, 0, "Komik");


// echo 'Game : '. $produk1->getLabel();
// echo "<hr>";
// echo 'Komik : '. $produk2->getLabel();
// echo "<hr>";


$cetakProduk1 = new printProductInfo();

// echo $cetakProduk1->cetak($produk2);
// echo "<hr>";
echo $produk1->getProductInfo();
echo "<hr>";
echo $produk2->getProductInfo();
echo "<hr>";
echo $produk3->getProductInfo(); 