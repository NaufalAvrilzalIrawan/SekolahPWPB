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
           $wktMain,
           $tipe;

        public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $wktMain = 0, $tipe) {
            $this->judul = $judul;
            $this->pembuat = $pembuat;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHal = $jmlHal;
            $this->wktMain = $wktMain;
            $this->tipe = $tipe;
        }


    public function getLabel() {
        return "$this->pembuat, $this->penerbit";
    }


    public function getInfoLengkap() {
        // Komik : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        if ( $this->tipe == "Komik" ) {
            $str .= " - {$this->jmlHal} Halaman.";
        }
        
        else if ( $this->tipe == "Game" ) {
            $str .= " ~ {$this->wktMain} Jam.";
        }

        return $str;
        // Game : Hollow Knight | Team Cherry, Team PCherry (Rp. 140000) ~ 35 Jam.

    }
}



class CetakInfoProduk{

    public function cetak( produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new produk("Hollow Knight", "Team Cherry", "Team PCherry", 140000, 0, 35, "Game");
$produk2 = new produk("Nauo", "Masi Khimo", "ShoJumpun", 35000, 132, 0, "Komik");
$produk3 = new produk("Dark Souls", "FromSoftware", "Bandai Namco", 300000, 0, 60, "Game");
$produk5 = new produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0, "Komik");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk5->getInfoLengkap();

// Komik : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman.
// Game : Hollow Knight | Team Cherry, Team PCherry (Rp. 140000) ~ 35 Jam.


?>