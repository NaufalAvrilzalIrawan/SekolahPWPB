<?php
//jual produk
//komik
//game

use CetakInfoProduk as GlobalCetakInfoProduk;
use Komik as GlobalKomik;
use produk as GlobalProduk;

interface InfoProduk {
    public function getInfoProduk();
}

//============================================================================================================

abstract class produk {

    protected $judul,
              $pembuat, 
              $penerbit,
              $harga,
              $diskon = 0;

    //--------------------------------------------------------------------------------------------------------

    public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //--------------------------------------------------------------------------------------------------------

    public function setJudul( $judul ) {
        if ( !is_string($judul)){
            throw new Exception("Judul harus String!");
        }
        
        $this->judul = $judul;
    }

    //--------------------------------------------------------------------------------------------------------

    public function getJudul() {
        return $this->judul;
    }

    //--------------------------------------------------------------------------------------------------------
    
    public function setPembuat( $pembuat ) {
        $this->pembuat = $pembuat;
    }

    //--------------------------------------------------------------------------------------------------------

    public function getPembuat() {
        return $this->pembuat;
    }

    //--------------------------------------------------------------------------------------------------------

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    //--------------------------------------------------------------------------------------------------------

    public function getPenerbit() {
        return $this->penerbit;
    }

    //--------------------------------------------------------------------------------------------------------

    public function setDiskon ( $diskon ) {
        if ( !is_int($diskon)){
            throw new Exception("Nomor aja oy!");
        }
        $this->diskon = $diskon;
    }

    //--------------------------------------------------------------------------------------------------------

    public function getDiskon() {
        return $this->diskon;
    }
    
    //--------------------------------------------------------------------------------------------------------

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    //--------------------------------------------------------------------------------------------------------

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    //--------------------------------------------------------------------------------------------------------

    public function getLabel() {
        return "$this->pembuat, $this->penerbit";
    }
    
    //--------------------------------------------------------------------------------------------------------

    abstract public function getInfo();
    //--------------------------------------------------------------------------------------------------------
    
    
}

//============================================================================================================

class Komik extends produk implements InfoProduk {
    public $jmlHal;

    //--------------------------------------------------------------------------------------------------------

    public function __construct( $judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0, $jmlHal = 0 ) {
        
        parent::__construct( $judul, $pembuat, $penerbit, $harga );
        $this->jmlHal = $jmlHal;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    //--------------------------------------------------------------------------------------------------------

    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHal} Halaman.";
        return $str;
    }
}

//============================================================================================================

class Game extends produk implements InfoProduk {
    public $wktMain;

    //--------------------------------------------------------------------------------------------------------

    public function __construct( $judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0, $wktMain = 0 ) {
        
        parent::__construct( $judul, $pembuat, $penerbit, $harga );
        $this->wktMain = $wktMain;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    //--------------------------------------------------------------------------------------------------------

    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->wktMain} Jam.";
        return $str;
    }
}

//============================================================================================================

class CetakInfoProduk{

    public $daftarProduk = [];

    //--------------------------------------------------------------------------------------------------------

    public function tambahProduk( produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    //--------------------------------------------------------------------------------------------------------

    public function cetak(){
        $str = "Daftar Produk : <br>";

        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


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



?>