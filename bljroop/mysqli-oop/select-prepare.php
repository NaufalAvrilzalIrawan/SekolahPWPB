<?php
    $host = 'localhost'; //127.0.0.1
    $user = 'root';
    $pass = '';
    $db = 'sekul';
    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->connect_errno) {
        echo "gagal konek" . $mysqli->connect_errno;
    }

    //versi array assoc

    // $query = "SELECT * FROM murid";
    // $result = $mysqli->query($query);

    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         echo $row['id'] . " " . $row['nama'] . " " . $row['alamat'] . "<br>";
    //     }
    // }
    // else {
    //     echo "Tidak ada data di tabel";
    // }

    // echo "<hr>";

    // //versi object

    // $query = "SELECT * FROM murid";
    // $result = $mysqli->query($query);

    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_object()) {
    //         echo $row->id . " " . $row->nama . " " . $row->alamat . "<br>";
    //     }
    // }
    // else {
    //     echo "Tidak ada data di tabel";
    // }

    $nama = "Jack";
    $alamat_param = "kkangkung";

    $murid = $mysqli->prepare("SELECT nama, alamat FROM murid WHERE alamat=?");
    $murid->bind_param("s", $alamat_param);
    $murid->execute();

    $murid->bind_result($nama, $alamat);

    while($murid->fetch()) {
        echo $nama . " - " . $alamat . "<br>";
    }

    $mysqli->close();
?>