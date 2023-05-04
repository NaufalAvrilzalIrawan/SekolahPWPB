<html>
<head>
    <title>Inventaris Barang</title>

    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>Inventaris</h1>

    <form action="inventaris.php" method="get">
        
        <!--memunculkan pilihan sortir lewat kateogri-->
        <select name="pilihan">
            <option value="">Tampilkan Semua</option>
            <option value=" where kategori_barang = 'alat' ">Alat</option>
            <option value=" where kategori_barang = 'zat kimia' ">Zat Kimia</option>
        </select>

        <!--input untuk mengsortir tabel-->
        <input type="submit" value="Munculkan">

        <!--button dengan link untuk pergo ke halaman tambah stok-->
        <button><a href="tambah.php">Tambah Stok</a></button>
    </form>

    <table cellspacing="0" border="1" cellpadding="1">
        
        <!--baris pertama di tabel-->
        <tr>
            <th>No Inventaris</th>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>stok</th>
            <th colspan="2">Aksi</th>
        </tr>

        <!--pemanggilan data mysql dan membuat baris table sampai data habis-->
        <?php
            include "koneksi_db.php";

            $no = 1;
            $kat = $_GET['pilihan'];

            $queri = "select * from tb_barang".$kat;
            $hasil = mysqli_query($koneksi, $queri);
            while ($data = mysqli_fetch_array($hasil)) {
                echo "<tr><th>" .$no. "</th>
                <td>" .$data['id_barang']. "</td>
                <td>" .$data['nama_barang']. "</td>
                <td>" .$data['kategori_barang']. "</td>
                <td>" .$data['stok']. "</td>
                <td><a href='edit.php?id=$data[id_barang]'>ubah</a></td>
                <td><a href='?id=$data[id_barang]'>hapus</a></td>
                </tr>";

                $no++;
            }
        ?>
    </table>
    <script>
        //penghapusan baris data dari database
        <?php
            if (isset($_GET['id'])) {
                mysqli_query($koneksi, "delete from tb_barang where id_barang = '$_GET[id]'");

                echo "Data terhapus";
                echo "<meta http-equiv=refresh content=1; URL='inventaris.php'>";
            }
        ?>
    </script>
</body>
</html>