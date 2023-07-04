<?php
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