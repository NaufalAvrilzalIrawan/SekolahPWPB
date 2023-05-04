<html>
<head>
    <title>Info</title>
    <style>
        body {
            background-image: url("https://getwallpapers.com/wallpaper/full/c/b/e/1334814-large-best-4k-wallpapers-3840x2160.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            margin-top: 33vh;
        }
        div {
			width: 550px;
            height: 310px;
		}
		.bo {
			border: 2px solid black;
            background-color: white;
		}
    </style>
</head>
<body>
<!--mengubah variabel-->
<?php
    $rekening=$_POST['rekening'];
    $bank=$_POST['bank'];
    $tujuan=$_POST['tujuan'];
    $nominal=$_POST['nominal'];
    $catatan=$_POST['catatan'];
?>

<center>
<div class="bo">
<h1 style="text-align:center;">INFO TRANSAKSI</h1>
<table>
<!--output rekening-->
<tr>
    <td>rekening</td>
    <td>:</td>
    <td> <?php echo $rekening; ?></td>
</tr>
<!--output bank-->
<tr>
    <td>Bank</td>
    <td>:</td> 
    <td> <?php echo $bank; ?></td>
</tr>
<!--output TTL-->
<tr>
    <td>Rekening Tujuan</td>
    <td>:</td>
    <td> <?php echo $tujuan; ?></td>
</tr>
<tr>
    <td>Nominal</td>
    <td>:</td>
    <td> <?php echo $nominal; ?></td>
</tr>
<tr>
    <td>Catatan</td>
    <td>:</td>
    <td> <?php echo $catatan; ?></td>
</tr>
    
<!--if mengubah nomer ke rekening bulan-->