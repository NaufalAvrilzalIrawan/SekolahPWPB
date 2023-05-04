<html>
<head>
    <title>Pilihan</title>
    <style>
        body {
            background-image:url("Ctulhu.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            margin-top: 20vh;
        }
        div {
			width: 500px;
		}
		.bo {
			border: 2px solid black;
            background-color: rgba(255, 255, 255, 0.8);
        
		}
        table {
            width: 100%;
        }
    </style>
</head>

<body>
<center>
<h1 style="color: white; text-shadow:10px 0 10px black;">Pemilihan Kategori Barang</h1>
<form action="pilih.php" method="get">
    <select name="pilihan">
        <option value="">Tampilkan Semua</option>
        <option value=" where KodeKategori = 'mkn00' ">Makanan</option>
        <option value=" where KodeKategori = 'mnm00' ">Minuman</option>
        <option value=" where KodeKategori = 'art00' ">Alat Rumah Tangga</option>
        <option value=" where KodeKategori = 'bmd00' ">Bumbu Dapur</option>
        <option value=" where KodeKategori = 'elk00' ">Elektronik</option>
    </select>
    <input type="submit" value="munculkan">
</form>

<div class="bo">
<table cellspacing="0" border="1" cellpadding="1">
    <tr>
        <th>Kode Barang</th>
        <th>Kode Kategori</th>
        <th>Nama Barang</th>
        <th colspan="2">Harga Barang</th>
    </tr>
<?php
    include "koneksi_db.php";
?>
<section style="display:none;">
        <?php 
            $kat = $_GET['pilihan'];
        ?>
</section>
<?php
    $queri = "select * from barang". $kat;
    $hasil = mysqli_query($koneksi, $queri);
    while ($data = mysqli_fetch_array($hasil)) {
        echo "<tr><th>" .$data['KodeBarang']. "</th><td>" .$data['KodeKategori']. "</td><td>" .$data['NamaBarang']. "</td><td>Rp. " .$data['HargaBarang']. "</td</tr>";
        echo "<br>";
    }
?>
</table>
</div>
</center>
</body>
</html>