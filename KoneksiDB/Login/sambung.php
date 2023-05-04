<?php
include "koneksi_db.php";

	$uus = $_POST['namd'];
	$pewe = $_POST['sand'];


    $sql = "insert into user(Username, Password) values('".$uus."','".$pewe."')";
    $muncul = mysqli_query($koneksi,$sql);
    
?>