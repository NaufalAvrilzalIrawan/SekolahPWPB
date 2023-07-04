<?php
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