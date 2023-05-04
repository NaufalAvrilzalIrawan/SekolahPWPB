<?php 
    include "koneksi_db.php";
    if(isset($_POST['barang'])){
        $sode = $_POST['barang'];

        $query = "select * from barang where KodeBarang = ".$sode;
        $hasil = mysqli_query($koneksi, $query);

        while($data = mysqli_fetch_array($hasil)){
            echo "Rp. ". $data['HargaBarang'];
        }
    }

?>