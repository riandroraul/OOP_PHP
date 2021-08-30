<?php 

class Produk{
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = 0;
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk2 = new Produk();

// $produk1->judul = "Naruto";
// $produk2->judul = "Resident Evil";

// $produk1->tambahProp = "Property Baru";


// var_dump($produk1);
// var_dump($produk2);

$produk3 = new Produk();

$produk3->judul = "Resident Evil";
$produk3->penulis = "James Brian";
$produk3->penerbit = "Capcom";
$produk3->harga = 250000;

// var_dump($produk3);


echo 'Game : '. $produk3->getLabel();

echo "<hr>";

$produk4 = new Produk();

$produk4->judul = "Doraemon";
$produk4->penulis = "Fujiko F Fujio";
$produk4->penerbit = "Shogakukan";
$produk4->harga = 35000;

echo 'Komik : '. $produk4->getLabel();

echo "<hr>";

