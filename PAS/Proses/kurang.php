<?php
    include "koneksi_db.php";


    $idb = $_POST['idb'];
    $jml = $_POST['jml'];

    $lto = mysqli_query("select * from tb_barang where id_barang='$idb'");
    $pil = mysqli_fetch_array($sto);
    $sto = $pil['stok'];

    $hsl = $sto - $idb;

    if ($sto < $jml) {
        echo "<script>alert ('baca dulu bang');</script>";
    }
    else {
        mysqli_query($koneksi, "UPDATE tb_barang SET stok='".$hsl."' WHERE id_barang ='".$idb."'");
        echo "<script> alert ('kukira hubungan kita spesial');</script>";
    }
?>