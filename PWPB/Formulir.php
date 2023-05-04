<html>
<head>
    <title>I AM THE ONE WHO KNOCK</title>
</head>
<body>
<!--mengubah variabel-->
<?php
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tempat=$_POST['tempat'];
    $tgl=$_POST['tgl'];
    $bln=$_POST['bln'];
    $thn=$_POST['thn'];
	$kelamin=$_POST['kelamin'];
	$hp=$_POST['hp'];
?>
<center>
<h1 style="text-align:center;">FORM</h1>
<table>
<!--output nama-->
<tr>
    <td>Nama</td>
    <td>:</td>
    <td> <?php echo $nama; ?></td>
</tr>
<!--output alamat-->
<tr>
    <td>Alamat</td>
    <td>:</td> 
    <td> <?php echo $alamat; ?></td>
</tr>
<!--output TTL-->
<tr>
    <td>Tempat / Tanggal Lahir</td>
    <td>:</td>
    <td> <?php echo $tempat; ?> / <?php echo $tgl; ?> 
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
<!--output kelamin-->
<tr>
    <td>Kelamin</td>
    <td>:</td> 
    <td> <?php echo $kelamin; ?></td>
</tr>
<!--output hp-->
<tr>
    <td>Nomer HandPhone</td>
    <td>:</td>
    <td><?php echo $hp; ?></td>
</tr>
</table>
</center>
</body>
</html>