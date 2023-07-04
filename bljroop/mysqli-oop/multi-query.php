<?php
    $host = 'localhost'; //127.0.0.1
    $user = 'root';
    $pass = '';
    $db = 'sekul';
    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->connect_errno) {
        echo "gagal konek" . $mysqli->connect_errno;
    }

    $sql = "INSERT INTO murid (nama, alamat) VALUES ('Sara', 'Jl. jiju');";
    $sql .= "INSERT INTO murid (nama, alamat) VALUES ('kil', 'Jl. pol');";
    $sql .= "INSERT INTO murid (nama, alamat) VALUES ('Siu', 'Jl. kilo')";

    if ( $mysqli->multi_query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    }
    else {
        echo "Data gagal ditambahkan";
    }

    $mysqli->close();
?>