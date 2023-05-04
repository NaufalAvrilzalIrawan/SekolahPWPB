<?php
    include "koneksi_db.php";

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "insert into user(Username, Password) values ('".$user."', '".$pass."')";
    $masuk = mysqli_query($koneksi, $sql);
?>