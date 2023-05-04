<style>
        body {
            
        }
        div {
			width: 500px;
		}
		.bo {
		border: 2px solid black;
        background-color: rgba(255, 255, 255, 0.8);
        
	    }
        table {
            width: 100%;
        }
</style>
<?php
include "koneksi_db.php";

if (isset($_POST['nota'])) {
    $toba = 0;
	$tanggal = $_POST['tanggal'];
	$dota = $_POST['nota'];
	$kode = $_POST['barang'];
	$jumlah = $_POST['jumlah'];


    $sql = "insert into transaksi(NoNota, TanggalTransaksi, KdBarang, JumlahBeli) values(".$dota.",'".$tanggal."',".$kode.",".$jumlah.")";
    $muncul = mysqli_query($koneksi,$sql);

    echo "
	<br>
	<center><h2>Leneng Mas</h2></center>
	<br>
	<table class='tablen'>
        <tr>
            <th>No Nota</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Barang</th>
            <th>Jumlah Beli</th>
            <th>Harga satuan</th>
            <th>Total Transaksi</th>
        </tr>";

    $kotak = "select * from barang, transaksi where transaksi.NoNota = ". $dota ." and barang.KodeBarang = transaksi.KdBarang";
    $summon = mysqli_query($koneksi, $kotak);
    while ($masuk = mysqli_fetch_array($summon)) {
        
        echo 
		 "<tr>
			<td>".$masuk['NoNota']."</td>
			<td>".$masuk['TanggalTransaksi']."</td>
			<td>".$masuk['NamaBarang']."</td>
			<td>".$masuk['JumlahBeli']."</td>
			<td>Rp.".$masuk['HargaBarang']."</td>
			<td>";
		$toga = $masuk['HargaBarang']*$masuk['JumlahBeli'];
		echo "Rp.".$toga."</td></tr>";
		$toba = $toba + $toga;
        
    }
    echo 
	"<tr>
	    <th colspan='5'>Total bayar:</th>
		<td style='text-align : center;'>Rp.".$toba."</td>
	</tr>
	</table>";
}
?>