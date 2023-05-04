<!DOCRYPE html>
<html>
<head>
    <?php
    //membuat variabel menggunakan php
        include "koneksi_db.php";
        $queri = "select * from user";
        $hasil = mysqli_query($koneksi, $queri);
    ?>

    <link rel="stylesheet" type="text/css" href="indah.css">
    <style>
        
    </style>

</head>

<body>
<header>
    <h1><b>LogIn<b></h1>
</header>

<div>
<form action="" onclick="cek()" method="post" name="masuk" id="masuk">
<table>
    <tr>
        <td>Username</td>
        <td> : </td>
        <td><input type="text"  name="nama" id="nama"></input></td>
    </tr>
    <tr>
        <td>Password</td>
        <td> : </td>
        <td><input type="password"  name="sandi" id="sandi"></input></td>
    </tr>
    <tr>
        <td><input type="submit" name="Login" value="LOGIN"></input></td>
    </tr>
</table>
</form>
</div>

<script>
    function cek() {
        var username = document.masuk.nama.value;
        var password = document.masuk.sandi.value;
        
        if (username.length=="" && password=="") {
            alert ("Username dan Password kosong");
            return true;
        }
        
        if else {
            if (username.length=="") {
                alert ("Username kosong");
                return true;
            }
            
            if (password.length=="") {
                alert ("Password kosong");
                return true;
            }
        }

        else {

</script>
<?php
    if (isset($_POST['Login'])) {

        include "koneksi_db.php";

        $user = $_POST['nama'];
        $pass = $_POST['sandi'];

        $user = stripcslashes($user);
        $pass = stripcslashes($pass);
        $user = mysqli_real_escape_string($koneksi, $user);
        $pass = mysqli_real_escape_string($koneksi, $pass);

        $sql = "select * from user where Username = '$user' and Password = '$pass'";
        $hasil = mysqli_query($koneksi, $sql);
        $array = mysqli_fetch_array($hasil);
        $cek = mysqli_num_rows($hasil);

        if ($cek==1) {
            echo "<script>alert('Anda Berhasil Masuk');</script>";
            echo "<script>window.location.replace('InputDatB.php') </script>";
        }
        else {
            echo "<script>alert ('Username atau Password tidak valid. Kembali'); </script>";
            echo "<script>window.location.replace('LogIn.php') </script>";
        }
    }
?>
<script>
        }
    }
</script>



</body>
</html>

