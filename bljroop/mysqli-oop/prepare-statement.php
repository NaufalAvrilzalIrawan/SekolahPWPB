<?php
    $host = 'localhost'; //127.0.0.1
    $user = 'root';
    $pass = '';
    $db = 'sekul';
    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->connect_errno) {
        echo "gagal konek" . $mysqli->connect_errno;
    }

    //prepare statement
    $statement = $mysqli->prepare("INSERT INTO murid (nama, alamat) VALUES (?, ?)");
    $statement->bind_param("ss", $nama, $alamat);


    //mengisi nilai paramet + mengeksekusi
    $nama = "Nus";
    $alamat = "Alag";
    $statement->execute();

    $nama = "Nubas";
    $alamat = "Alung";
    $statement->execute();

    $mysqli->close();
?>