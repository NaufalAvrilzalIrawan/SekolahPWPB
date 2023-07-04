<?php

require_once 'App/init.php';

$produk1 = new Game("Hollow Knight", "Team Cherry", "Team PCherry", 140000, 35);
$produk2 = new Komik("Nauo", "Masi Khimo", "ShoJumpun", 35000, 132);
$produk3 = new Game("Dark Souls", "FromSoftware", "Bandai Namco", 300000, 60);
$produk4 = new Komik("Keju Gulung", "Naufal", "Keju Gulung Corp.", 5000);
$produk5 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
$cetakProduk->tambahProduk( $produk3 );
$cetakProduk->tambahProduk( $produk4 );
$cetakProduk->tambahProduk( $produk5 );

echo $cetakProduk->cetak();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;
new ServiceUser();
echo "<br>";
new ProdukUser();
echo "<br>";

// echo "<br>";
// new App\Service\User();



?>