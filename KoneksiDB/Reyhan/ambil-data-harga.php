<?php 
include "koneksi_db.php";
if(isset($_POST['kd_barang'])){
	$code = $_POST['kd_barang'];
	
	$query = "select * from barang where Kd_Barang = ".$code;
	$hasil = mysqli_query($koneksi, $query);
	while($data = mysqli_fetch_array($hasil)){
	echo "Rp. ".$data['Harga_Barang'];
	}
	
}