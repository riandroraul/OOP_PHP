<?php 

// protected = hanya bisa digunakan pada class parent dan turunannya (child)

// private = hanya bisa digunakan pada class parent / class tertentu saja

class Produk{
	public $judul,
	       $penulis,
	       $penerbit;
	protected $harga;

	private $diskon;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getProductInfo(){
		$str = "{$this->judul}, {$this->getLabel()}, (Rp. {$this->harga}) ";
		return $str;
	}

	public function getDiskon($diskon){
		$this->diskon = $diskon;
		$this->harga -= $this->diskon;

		return $this->harga;
	}

}

class Komik extends Produk{
	
	public $jmlHalaman;

	public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}
	public function getProductInfo(){
		$str = "Komik : " . parent::getProductInfo() . " - {$this->jmlHalaman} Halaman";
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
		$str = "Game : ". parent::getProductInfo() ." ~ {$this->jamMain} Jam";
		return $str;
	}
	public function getPrice(){
		return $this->harga;
	}
}

class printProductInfo{

	public function cetak(Produk $produk){
		$strInfo = "{$produk->judul}, {$produk->getLabel()}, (Rp. $produk->harga)";
		return $strInfo;
	}
}


$produk1 = new Game("Resident Evil", "James Brian", "Capcom", 250000, 50);
$produk2 = new Komik("Doraemon", "Fujiko F Fujio", "Shogakukan", 35000, 100);
$produk3 = new Komik("Dragon ball", "Akira Toriyama", "Elexmedia", 38000, 200);


echo $produk1->getProductInfo();
echo "<hr>";
echo $produk2->getProductInfo();
echo "<hr>";
echo $produk3->getProductInfo(); 
echo "<hr>";

echo $produk1->getPrice();
echo"<br>";
echo $produk1->getDiskon(50000);

