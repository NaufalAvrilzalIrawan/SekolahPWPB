<html>
<head>
    <title>Kategori</title>
    <style>
        body {
            background-image: url("Ctulhu.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            margin-bottom: 100vh;
        }
        div {
			width: 600px;
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
<h1 style="margin-top : -120px; color: white; text-shadow:10px 0 10px black;">Kategori</h1>
<div class="bo" style="margin-top : -10px; ">
<table cellspacing="0" border="1" cellpadding="1">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th colspan="2">Nama Kategori</th>
    </tr>
<?php
    include "koneksi_db.php";

    $queri = "select * from barang, kategori where KodeKategori = kd_kat";
    $hasil = mysqli_query($koneksi, $queri);
    while ($data = mysqli_fetch_array($hasil)) {
        echo "<tr><th>" .$data['KodeBarang']. "</th><td>" .$data['NamaBarang']. "</td><td>Rp. " .$data['HargaBarang']. "</td><td>" .$data['nama_kategori']. "</td</tr>";

    }
?>
</table>
</div>
</body>
</html>