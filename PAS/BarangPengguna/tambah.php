<html>
<head>
    <title>Tambah Barang</title>
    <!--memanggil data dari database-->
    <?php
        include "koneksi_db.php";

        $sql = mysqli_query($koneksi, "select * from tb_barang");
        $data = mysqli_fetch_array($sql);
    ?>
</head>
<body>
    <table>
    <!--input data untuk database tanpa id(Auto Incritment)-->
    <form method="POST" id="fedit">
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nmb" id="nmb" placeholder="Masukan nama barang"></td>
        </tr>        
        <tr>
            <td>Kategori Barang</td>
            <td>:</td>
            <td><input type="text" name="kat" id="kat" placeholder="Masukan kategori barang"></td>
        </tr>
        <tr>
            <td>stok</td>
            <td>:</td>
            <td><input type="number" name="stk" id="stk" placeholder="Masukan jumlah barang"></input></td>
        </tr>
        <tr>
            <!--inpup data ke isset-->
            <td><input type="submit" name="tam" value="tambah"></td>

            <!--button untuk kembali-->
            <td><button><a href="inventaris.php">Kembali</a></button></td>
        </tr>
    </form>

    </table>

    <script>
        //penginputan data dari form ke database
        <?php
            $nama = $_POST['nmb'];
            $kate = $_POST['kat'];
            $stok = $_POST['stk'];

            if (isset($_POST['tam'])) {
                mysqli_query ($koneksi, "INSERT INTO tb_barang
                (nama_barang, kategori_barang, stok) 
                VALUES ('".$nama."','".$kate."','".$stok."')");

                echo "data telah tersimpan";
                echo "<meta http-equiv=refresh content=1; URL='inventaris.php'>";
            }
        ?>
    </script>
</body>
</html>