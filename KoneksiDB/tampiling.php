<html>
<head>
    <title>Tampilan</title>
    <style>
        body {
            background-image: url("https://cdn.wallpapersafari.com/95/10/r9Roj0.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            margin-top: 20vh;
            margin-left: 10vh;
        }
        div {
			width: 500px;
		}
		.bo {
			border: 2px solid black;
            background-color: rgba(255, 255, 255, 0.9);
        
		}
        table {
            width: 100%;
        }
    </style>
</head>
<body>
<h1 style="color: white; text-shadow:10px 0 10px black;">Momen Ketika Lu Liat Harga Barang Bilek:</h1>
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

    $queri = "select * from barang";
    $hasil = mysqli_query($koneksi, $queri);
    while ($data = mysqli_fetch_array($hasil)) {
        echo "<tr><th>" .$data['KodeBarang']. "</th><td>" .$data['KodeKategori']. "</td><td>" .$data['NamaBarang']. "</td><td>Rp. " .$data['HargaBarang']. "</td</tr>";
        echo "<br>";
    }
?>
</table>
</div>
</body>
</html>