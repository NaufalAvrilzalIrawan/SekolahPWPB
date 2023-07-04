<?php
//jual produk
//komik
//game

class produk {
    public $judul = "judul",
           $pembuat = "pembuat", 
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->judul, $this->pembuat, $this->penerbit, $this->harga";
    }
}

// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "GoW";
// $produk2->tambahpropery = "hahaha";

// var_dump($produk2->judul);

$produk3 = new produk();
$produk3->judul = "Dark Souls";
$produk3->pembuat = "FromSoftware";
$produk3->penerbit = "Bandai Namco";
$produk3->harga = 300000;
var_dump($produk3);

echo "<hr>";

$produk4 = new produk();
$produk4->judul = "Naruto";
$produk4->pembuat = "Masashi Kishimoto";
$produk4->penerbit = "Shounen Jump";
$produk4->harga = 30000;
var_dump($produk4);

echo "<br>";
echo "<br>";
echo "Game : " . $produk3->getLabel();
echo "<br>";
echo "Komik : " . $produk4->getLabel();



?>