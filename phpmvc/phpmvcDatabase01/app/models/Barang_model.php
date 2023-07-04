<?php

class Barang_model {
    private $dbh; // database handler
    private $stmt;

    public function __construct() {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=barangg';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }
        catch(PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllBarangs() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM barang');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// .
// - Komik : Nauo | Masi Khimo, ShoJumpun (Rp. 35000) - 132 Halaman.
// - Game :  | ,  () ~  Jam.
// - Komik : Keju Gulung | Naufal, Keju Gulung Corp. (Rp. 5000) - 0 Halaman.
// - Komik : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000)