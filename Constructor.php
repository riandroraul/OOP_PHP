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

$produk1 = new Produk("Resident Evil", "James Brian", "Capcom", 250000);
$produk2 = new Produk("Doraemon", "Fujiko F Fujio", "Shogakukan", 35000);
$produk3 = new Produk("Dragon ball", "Akira Toriyama", "Elexmedia", );


echo 'Game : '. $produk1->getLabel();
echo "<hr>";
echo 'Komik : '. $produk2->getLabel();
echo "<hr>";
echo 'Komik : '. $produk3->getLabel();



