<html>
<head>
    <title>Ubah Barang</title>
    <!--memanggil data dari database sesuai dengan id yang di klik-->
    <?php
        include "koneksi_db.php";

        $sql = mysqli_query($koneksi, "select * from tb_barang where id_barang='$_GET[id]'");
        $data = mysqli_fetch_array($sql);
    ?>
</head>
<body>
    <table>
    <!--menginput data dengan id yang sesuai dengan data di klik-->
    <form method="POST" id="fedit">
    
        <tr>
            <td>ID Barang</td>
            <td>:</td>
            <td><input type="number" name="idb" id="idb" value="<?php echo $data['id_barang']?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nmb" id="nmb" value="<?php echo $data['nama_barang']?>"></td>
        </tr>
        <tr>
            <td>Kategori Barang</td>
            <td>:</td>
            <td><input type="text" name="kat" id="kat" value="<?php echo $data['kategori_barang']?>"></td>
        </tr>
        <tr>
            <td>stok</td>
            <td>:</td>
            <td><input type="number" name="stk" id="stk" value="<?php echo $data['stok']?>"></input></td>
        </tr>
        <tr>
            <!--menginput untuk ke isset-->
            <td><input type="submit" name="ubah" value="ubah"></td>
            <!--tombol dengan link kembali ke tabel-->
            <td><button><a href="inventaris.php">Kembali</a></button></td>
        </tr>
    </form>
    </table>

    <script>
        //memasukkan data ke database
        <?php
            if (isset($_POST['ubah'])) {
                mysqli_query ($koneksi, "update tb_barang set
                nama_barang = '$_POST[nmb]',
                kategori_barang = '$_POST[kat]',
                stok = '$_POST[stk]'
                where id_barang = '$_GET[id]'");

                echo "data telah tersimpan";
                echo "<meta http-equiv=refresh content=1; URL='inventaris.php'>";
            }
        ?>
    </script>
</body>
</html>