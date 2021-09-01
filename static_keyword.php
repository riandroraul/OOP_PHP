<?php 



class Mobil {
	public static $merk = "Avanza",
				  $transmisi = 1;

	public static function speed(){
		return "Kecepatan Bertambah ". self::$transmisi++ . " kali";
	}
}

$mobil1 = new Mobil();

echo $mobil1::$merk;

echo '<hr>';

echo $mobil1::speed(). "<br>";
echo $mobil1::speed(). "<br>";
echo $mobil1::speed(). "<br>";

echo '<hr>';

$mobil2 = new Mobil();

echo $mobil2::speed(). "<br>";
echo $mobil2::speed(). "<br>";
echo $mobil2::speed(). "<br>";
