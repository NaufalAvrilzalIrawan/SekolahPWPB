<?php
//jual produk
//komik
//game

class produk {
    public $judul,
           $pembuat, 
           $penerbit,
           $harga;

        public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->pembuat = $pembuat;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

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

$produk1 = new produk("Hollow Knight", "Team Cherry", "Team PCherry", 140000);
var_dump($produk1);

echo "<hr>";

$produk2 = new produk("Albi", "Malbi", "Alfamart", 25000);
var_dump($produk2);

echo "<hr>";

$produk3 = new produk("Dark Souls", "FromSoftware", "Bandai Namco", 300000);
var_dump($produk3);

echo "<hr>";

$produk4 = new produk("Dark");
var_dump($produk4);

echo "<hr>";

$produk5 = new produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
var_dump($produk5);

echo "<br>";
echo "<br>";
echo "Game : " . $produk1->getLabel();
echo "<br>";
echo "Komik : " . $produk2->getLabel();
echo "<br>";
echo "Game : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo "<br>";
echo "Komik : " . $produk5->getLabel();



?>