<?php

class Game_model {
    private $games = [
        [
            "nama" => "Hollow Knight",
            "pengembang" => "Team Cherry",
            "penerbit" => "Team PCherry",
            "harga" => "Rp. 140000",
            "waktu" => "35 Jam"
        ],
        [
            "nama" => "Dark Souls",
            "pengembang" => "FromSoftware",
            "penerbit" => "Bandai Namco",
            "harga" => "Rp. 300000",
            "waktu" => "60 Jam"
        ],
        [
            "nama" => "Sekiro",
            "pengembang" => "FromSoftware",
            "penerbit" => "Activision",
            "harga" => "Rp. 700000",
            "waktu" => "15 Jam"
        ],

    ];

    public function getAllGames() {
        return $this->games;
    }
}

// .
// - Komik : Nauo | Masi Khimo, ShoJumpun (Rp. 35000) - 132 Halaman.
// - Game :  | ,  () ~  Jam.
// - Komik : Keju Gulung | Naufal, Keju Gulung Corp. (Rp. 5000) - 0 Halaman.
// - Komik : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000)