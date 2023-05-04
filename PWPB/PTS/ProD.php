<html>
<head>
    <style>
        body {
            background-image: url("https://images.hdqwalls.com/download/windows-xp-bliss-4k-lu-1366x768.jpg");
            margin-top: 20vh;
        }
        div {
			width: 550px;
			heigth: 690px;
		}
		.bo {
			border: 2px solid black;
            background-color: white;
		}
    </style>
    <script type="text/javascript" Language="javascript">        
        function klikAku() {
            alert("Djawa adalah Ktoenci");
        }
    </script>
<?php
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $upass=$_POST['upassword'];
    $nama=$_POST['nama'];
    $tpt=$_POST['tempat'];
    $tgl=$_POST['tgl'];
    $bln=$_POST['bln'];
    $thn=$_POST['thn'];
    $bln=$_POST['bln'];
    $amt=$_POST['alamat'];
?>

<?php
if ($user == "NAI45") {
    header ("Location: UserS.php");
}
else if ($pass != $upass){
    header  ("Location: PaS.php");
die();
}
?>
</head>
<body>
<center>
<div class="bo">
<h1 style="text-align:center;">Selamat Bergabung <?php echo $nama; ?></h1>
<table>
<!--output username-->
<tr>
    <td>Username</td>
    <td>:</td>
    <td> <?php echo $user; ?></td>
</tr>
<!--output nama-->
<tr>
    <td>Password</td>
    <td>:</td>
    <td> <?php echo $pass; ?></td>
</tr>
<!--output nama-->
<tr>
    <td>Nama</td>
    <td>:</td>
    <td> <?php echo $nama; ?></td>
</tr>
<!--output TTL-->
<tr>
    <td>Tempat / Tanggal Lahir</td>
    <td>:</td>
    <td> <?php echo $tpt; ?> / <?php echo $tgl; ?> 
<!--if mengubah nomer ke nama bulan-->
<?php 
if ($bln==1) {
    echo ("Januari");
}
if ($bln==2) {
    echo ("Februari");
}
if ($bln==3) {
    echo ("Maret");
}
if ($bln==4) {
    echo ("April");
}
if ($bln==5) {
    echo ("Mei");
}
if ($bln==6) {
    echo ("Juni");
}
if ($bln==7) {
    echo ("Juli");
}
if ($bln==8) {
    echo ("Agustus");
}
if ($bln==9) {
    echo ("September");
}
if ($bln==10) {
    echo ("Oktober");
}
if ($bln==11) {
    echo ("November");
}
if ($bln==12) {
    echo ("Desember");
}
?>

<?php echo $thn; ?> </td>
<!--output alamat-->
<tr>
    <td>Alamat</td>
    <td>:</td> 
    <td> <?php echo $amt; ?></td>
</tr>
</table>
<form>
    <input type="button" name="tombol" value="Jangan Klik" onclick="klikAku()">
</form>
</center>
</body>
</html>