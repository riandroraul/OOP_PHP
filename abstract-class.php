<?php 

abstract class Produk{
	private $judul,
	       $penulis,
	       $penerbit,
	       $harga;
	protected $diskon = 0;


	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setJudul($judul){
		$this->judul = $judul;
	}

	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit($penerbit){
		return $this->penerbit;
	}

	public function setPrice($harga){
		$this->harga = $harga;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getPrice(){
		return $this->harga - ($this->harga * $this->diskon /100);
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getProductInfo();

	public function getInfo(){
		$str = "{$this->judul}, {$this->getLabel()}, (Rp. {$this->harga}) ";
		return $str;
	}


}

class Komik extends Produk{
	
	public $jmlHalaman;

	public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}
	public function getProductInfo(){
		$str = "Komik : {$this->getInfo()} - {$this->jmlHalaman} Halaman";
		return $str;
	}
}

class Game extends Produk{
	public $jamMain;

	public function __construct($judul, $penulis, $penerbit, $harga, $jamMain){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jamMain = $jamMain;
	}
	public function getProductInfo(){
		$str = "Game : {$this->getInfo()} ~ {$this->jamMain} Jam";
		return $str;
	}
	
}

class printProductInfo{
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


$produk1 = new Game("Resident Evil", "James Brian", "Capcom", 250000, 50);
$produk2 = new Komik("Doraemon", "Fujiko F Fujio", "Shogakukan", 35000, 100);
$produk3 = new Komik("Dragon ball", "Akira Toriyama", "Elexmedia", 38000, 200);


$printProduct = new printProductInfo();

$printProduct->addProduct($produk1);
$printProduct->addProduct($produk2);
$printProduct->addProduct($produk3);

echo $printProduct->cetak();





