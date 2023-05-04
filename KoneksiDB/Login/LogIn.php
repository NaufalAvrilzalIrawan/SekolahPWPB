<!DOCRYPE html>
<html>
<head>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php
    //membuat variabel menggunakan php
        include "koneksi_db.php";
        $queri = "select * from barang";
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
<form action="BLogIn.php" onclick="cek()" method="post" name="masuk" id="masuk">
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
        <td><input type="submit" id="masuk" value="henshin"></input></td>
    </tr>
</table>
</form>
<br><br><br>
</div>

<h1>Sign Up</h1>
<form method="POST" id="formd">
<table>
    <tr>
        <td>Username</td>
        <td> : </td>
        <td><input type="text" id="namd" name="namd"></input></td>
    </tr>
    <tr>
        <td>Password</td>
        <td> : </td>
        <td><input type="password"  id="sand" name="sand"></input></td>
    </tr>
    <tr>
        <td></td>
    </tr>
</table>
</form>
<button onclick="g()" id="daftar">Daftar</button>


<script>
    function g() {
        var fdv = $("#formd").serialize();


    // menggunakan ajax untuk mengirim dan menerima data dari server
        $.ajax({
            type : "POST",
            dataType : "html",
            url : "sambung.php",
            data : fdv,
            success : function(data) {
                $("#berhasil").html(data);
            }
        });
    };
</script>

<script>
    function cek() {
        var username = document.masuk.nama.value;
        var password = document.masuk.sandi.value;
        
        if (username.length=="" && password=="") {
            alert ("Username dan Password kosong");
            return true;
        }
        
        else {
            if (username.length=="") {
                alert ("Username kosong");
                return true;
            }
            
            if (password.length=="") {
                alert ("Password kosong");
                return true;
            }
        }
    }
</script>
</body>
</html>

