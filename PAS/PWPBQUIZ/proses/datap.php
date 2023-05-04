<?php
    include "koneksi_db.php";

    if (isset($_POST['kode'])) {
        $kode = $_POST['kode'];
        $namb = $_POST['nama_barang'];
        $kate = $_POST['kategori_barang'];
        $juml = $_POST['jumlah'];
        $namp = $_POST['nama_peminjam'];
        $wakp = $_POST['waktup'];
        $wakk = $_POST['waktuk'];
        $kete = $_POST['keterangan'];

        $id = mysqli_query($koneksi, "select id_barang from tb_barang where nama_barang = '".$namb."'");

        $sql = "INSERT INTO transaksi(KodePinjam, IdBarang, KodeKategori, NamaBarang, JumlahBarang, NamaPeminjam, WaktuPinjam, WaktuKembali, Keterangan) VALUES ('".$kode."','".$id."','".$kate."','".$namb."','".$jml."','".$namp."','".$wakp."','".$wakk."','".$kete."')";

        $masuk = mysqli_query($koneksi, $sql);

        echo "masuk mas";
    }
    else {
        echo "<script>alert ('not yet');</script>";
    }
?>