<?php
include "koneksi.php";

    $tgl = $_POST['tgl'];
    $no_fak = $_POST['no_fak'];
    $kode_barang = $_POST['barang'];
    $beli = $_POST['pangaos'];

    $sql = "insert into transaksi (no_fak,tgl,kd_brg,beli) values ('$no_fak','$tgl','$kode_barang','$beli')";
    $hasil = mysqli_query($koneksi, $sql);


?>