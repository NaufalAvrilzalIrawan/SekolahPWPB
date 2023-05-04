<?php
    include "koneksi_db.php";

    $idb = $_POST['idb'];
    $jml = $_POST['jml'];
    

    $query = "UPDATE tb_barang SET stok='".$jml."' WHERE id_barang ='".$idb."'";
    $tambah = mysqli_query($koneksi, $query);

    header("location:inventaris.php");
?>