<?php
//jual produk
//komik
//game

class produk {

    public $judul,
           $pembuat, 
           $penerbit,
           $harga,
           $jmlHal,
           $wktMain;

        public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $wktMain = 0) {
            $this->judul = $judul;
            $this->pembuat = $pembuat;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHal = $jmlHal;
            $this->wktMain = $wktMain;
        }


    public function getLabel() {
        return "$this->pembuat, $this->penerbit";
    }


    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends produk {
    public function getInfoProduk() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHal} Halaman.";
        return $str;
    }
}

class Game extends produk {
    public function getInfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->wktMain} Jam.";
        return $str;
    }
}



class CetakInfoProduk{

    public function cetak( produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Game("Hollow Knight", "Team Cherry", "Team PCherry", 140000, 0, 35);
$produk2 = new produk("Nauo", "Masi Khimo", "ShoJumpun", 35000, 132, 0);
$produk3 = new Game("Dark Souls", "FromSoftware", "Bandai Namco", 300000, 0, 60);
$produk5 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<br>";
echo $produk5->getInfoProduk();

// Komik : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman.
// Game : Hollow Knight | Team Cherry, Team PCherry (Rp. 140000) ~ 35 Jam.


?>