<html>
<head>
    <title>Kategori</title>
    <style>
        body {
            background-image: url("Ctulhu.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            margin-bottom: 10vh;
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


    <?php
        include "koneksi_db.php";

        
        $query = "select * from kategori";
        $muncul = mysqli_query($koneksi, $query);

        while ($isi = mysqli_fetch_array($muncul)) {
        

            echo "<table border='1' cellspacing='0'>
                    <tr><th colspan='4'>" . $isi['nama_kategori'] . "</th></tr>
                    <tr><th>KodeBarang</th><th>KodeKategori</th><th>NamaBarang</th><th>HargaBarang</th><tr>";

            $queri = "select * from barang where KodeKategori = '".$isi['kd_kat']."'";
            $hasil = mysqli_query($koneksi, $queri);
            
            while($data = mysqli_fetch_array($hasil)) {
                echo "<tr><th>" .$data['KodeBarang']. "</th><td>" .$data['KodeKategori']. "</td><td>" .$data['NamaBarang']. "</td><td>Rp. " .$data['HargaBarang']. "</td</tr>";
            }
            echo "</table>";
            $data++;
        }
    ?>
</table>
</div>
</body>
</html>