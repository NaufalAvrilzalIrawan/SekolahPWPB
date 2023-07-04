<?php
//jual produk
//komik
//game

class produk {

    public $judul,
           $pembuat, 
           $penerbit;
    protected $diskon = 0;
    private $harga;

    public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
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
    public $jmlHal;

    public function __construct( $judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0, $jmlHal = 0 ) {
        
        parent::__construct( $judul, $pembuat, $penerbit, $harga );
        $this->jmlHal = $jmlHal;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHal} Halaman.";
        return $str;
    }
}



class Game extends produk {
    public $wktMain;

    public function __construct( $judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0, $wktMain = 0 ) {
        
        parent::__construct( $judul, $pembuat, $penerbit, $harga );
        $this->wktMain = $wktMain;
    }

    public function setDiskon ( $diskon ) {
        return $this->diskon = $diskon;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->wktMain} Jam.";
        return $str;
    }
}



class CetakInfoProduk{

    public function cetak( produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Game("Hollow Knight", "Team Cherry", "Team PCherry", 140000, 35);
$produk2 = new produk("Nauo", "Masi Khimo", "ShoJumpun", 35000, 132);
$produk3 = new Game("Dark Souls", "FromSoftware", "Bandai Namco", 300000, 60);
$produk4 = new produk("Keju Gulung", "Naufal", "Keju Gulung Corp.", 5000);
$produk5 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();
echo "<br>";
echo $produk5->getInfoProduk();

echo "<hr>";


$produk3->setDiskon(85);
echo $produk3->getHarga();

// Komik : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman.
// Game : Hollow Knight | Team Cherry, Team PCherry (Rp. 140000) ~ 35 Jam.


?>