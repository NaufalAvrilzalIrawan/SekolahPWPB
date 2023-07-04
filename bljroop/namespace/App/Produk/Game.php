<?php
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