<html>
<head>
    <title>Pengguna</title>
</head>
<body>
    <h1>Pengguna</h1>

        <!--button dengan link untuk pergo ke halaman tambah stok-->
        <button><a href="signup.php">Buat Akun</a></button>


    <table cellspacing="0" border="1" cellpadding="1">
        
        <!--baris pertama di tabel-->
        <tr>
            <th>No</th>
            <th>Id User</th>
            <th>Username</th>
            <th>Role</th>
        </tr>

        <!--pemanggilan data mysql dan membuat baris table sampai data habis-->
        <?php
            include "koneksi_db.php";

            $no = 1;


            $queri = "select * from user";
            $hasil = mysqli_query($koneksi, $queri);
            while ($data = mysqli_fetch_array($hasil)) {
                echo "<tr><th>" .$no. "</th>
                <td>" .$data['IdUser']. "</td>
                <td>" .$data['Username']. "</td>
                <td>" .$data['Role']. "</td>
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