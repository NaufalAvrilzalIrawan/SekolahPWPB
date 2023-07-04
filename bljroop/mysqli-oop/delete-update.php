<?php
    $host = 'localhost'; //127.0.0.1
    $user = 'root';
    $pass = '';
    $db = 'sekul';
    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->connect_errno) {
        echo "gagal konek" . $mysqli->connect_errno;
    }

    
    //Menghapus data
    // $sql = "DELETE FROM murid WHERE nama='sara'";

    // if ( $mysqli->query($sql) === TRUE) {
    //     echo "Data berhasil dihapus";
    // }
    // else {
    //     echo "Data gagal dihapus";
    // }

    //mengubah data
    $sql = "UPDATE murid SET nama='Lex', alamat='kkangkung' WHERE nama='kil'";

    if ( $mysqli->query($sql) === TRUE) {
        echo "Data berhasil diedit";
    }
    else {
        echo "Data gagal diedit";
    }



    $mysqli->close();
?>