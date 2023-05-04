<?php
include "koneksi.php";

if (isset($_POST['kd_barang'])) {
    $kode = $_POST['kd_barang'];

    $sql = "select * from detail_barang where kd_brg=$kode";
    $hasil = mysqli_query($koneksi, $sql);
    while ($data = mysqli_fetch_array($hasil)) {
        
        echo  "Harga : ".$data['hrg_sat']; 
        
    }
}

if (isset($_POST['no_fak'])) {
    $tgl = $_POST['tgl'];
    $no_fak = $_POST['no_fak'];
    $kode_barang = $_POST['barang'];
    $beli = $_POST['pangaos'];

    $sql = "insert into transaksi (no_fak,tgl,kd_brg,beli) values ('$no_fak','$tgl','$kode_barang','$beli')";
    $hasil = mysqli_query($koneksi, $sql);

    ?>
        <table border="1">
        <tr>
            <th>No Nota</th>
            <th>Tgl</th>
            <th>NamBar</th>
            <th>Beli</th>
            <th>HaSat</th>
            <th>ToHar</th>
        </tr>
        <?php
            $ToBay=0;
            $sqlt = "select * from kategori,detail_barang,transaksi where detail_barang.kd_brg=transaksi.kd_brg and no_fak=$no_fak";
            $hasilt = mysqli_query($koneksi, $sqlt);
            while ($datat = mysqli_fetch_array($hasilt)) { 
        ?>
        <tr>
            <td><?php echo $datat['no_fak']; ?></td>
            <td><?php echo $datat['tgl']; ?></td>
            <td><?php echo $datat['nama_brg']; ?></td>
            <td><?php echo $datat['beli']; ?></td>
            <td><?php echo $datat['hrg_sat']; ?></td>
            <td><?php 
            $ToHar=$datat['hrg_sat']*$datat['beli'];
            echo $ToHar;
            $ToBay=$ToBay+$ToHar;
            ?></td>
        </tr>
        <?php 
            }
        ?>
        <tr>
            <th colspan="5">Jumlah Bayar</th>
            <th><?php echo $ToBay; ?></th>
        </table>
    <?php
}

?>