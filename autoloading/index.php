<?php 

require_once 'App/init.php';

$produk1 = new Game("Resident Evil", "James Brian", "Capcom", 250000, 50);
$produk2 = new Komik("Doraemon", "Fujiko F Fujio", "Shogakukan", 35000, 100);
$produk3 = new Komik("Dragon ball", "Akira Toriyama", "Elexmedia", 38000, 200);

$printProduct = new PrintProductInfo();

$printProduct->addProduct($produk1);
$printProduct->addProduct($produk2);
$printProduct->addProduct($produk3);

echo $printProduct->cetak();

echo '<hr>';

