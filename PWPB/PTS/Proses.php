<!DOCTYPE HTML>
<html>
<head>
    <title>Daftar</title>
    <style>
        body {
            background-image: url("https://cdn.wallpapersafari.com/65/99/TfXNib.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            margin-top: 40vh;
        }
        div {
			width: 550px;
            height: 100px;
		}
		.bo {
			border: 2px solid black;
            background-color: white;
		}
    </style>
</head>
<?php
    $user=$_POST['username'];
    $pass=$_POST['password'];
?>

<body>
<center>
<div class="bo">
    <br><br>
<?php
if ($user == "NAI45" && $pass == "123654") {
    header  ("Location: Transaksi.php");
die();
}
else {
    echo ("Username/Password salah");
}
?>
<a href="Login.php"><button>Kembali</button></a>
</center>
</body>
</html>