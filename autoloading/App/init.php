<?php 


// require_once 'App/Produk/InfoProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Komik.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/PrintProductInfo.php';

spl_autoload_register(function($class){
	require_once __DIR__ . '/Produk/' . $class . '.php';
	require_once __DIR__ . '/Service/' . $class . '.php';
});