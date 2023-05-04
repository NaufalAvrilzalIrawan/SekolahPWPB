<?php

include "koneksi_db.php";
if(isset($_POST['nota'])){
	$total_bayar = 0;
	$tanggal = $_POST['tanggal'];
	$nota = $_POST['nota'];
	$kode_barang = $_POST['kd_barang'];
	$jumlah = $_POST['jumlah'];
	
	$sql = "insert into transaksi(no_faktur, tanggal, kd_barang, beli) values(".$nota.",'".$tanggal."',".$kode_barang.",".$jumlah.")";
	$hazil = mysqli_query($koneksi, $sql);
	
	echo "
	<br>
	<center><h2>Pesanan anda</h2></center>
	<br>
	<table border='1' class='table table-stripped'>
        <tr>
            <th>No Nota</th>
            <th>Tanggal</th>
            <th>Nama barang</th>
            <th>Beli</th>
            <th>Harga satuan</th>
            <th>Total</th>
        </tr>";
	 $rusia = "select * from barang,transaksi where transaksi.no_faktur=".$nota." and barang.Kd_Barang = transaksi.kd_barang";
     $amerika = mysqli_query($koneksi, $rusia);
	 while($lord_joined_the_game = mysqli_fetch_array($amerika)){
		echo 
		 "<tr>
			<td>".$lord_joined_the_game['no_faktur']."</td>
			<td>".$lord_joined_the_game['tanggal']."</td>
			<td>".$lord_joined_the_game['Nama_Barang']."</td>
			<td>".$lord_joined_the_game['beli']."</td>
			<td>Rp.".$lord_joined_the_game['Harga_Barang']."</td>
			<td>";
		$total_harga = $lord_joined_the_game['Harga_Barang']*$lord_joined_the_game['beli'];
		echo "Rp.".$total_harga."</td></tr>";
		$total_bayar = $total_bayar + $total_harga;
			
	 }
	 echo 
	 "<tr>
		<th>Total bayar:</th>
		<td colspan='5' style='text-align : center;'>Rp.".$total_bayar."</td>
	</tr>
	</table>";
		
	
	
}
?>