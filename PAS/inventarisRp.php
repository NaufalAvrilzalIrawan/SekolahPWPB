<html>
<head>
    <title>Inventaris Barang</title>

    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>Inventaris</h1>

    <form action="inventaris.php" method="get">
        <select name="pilihan">
            <option value="">Tampilkan Semua</option>
            <option value=" where kategori_barang = 'alat' ">Alat</option>
            <option value=" where kategori_barang = 'zat kimia' ">Zat Kimia</option>
        </select>
        <input type="submit" value="Munculkan">
    </form>

    <table cellspacing="0" border="1" cellpadding="1">
        <tr>
            <th>No Inventatis</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>

        <?php
            include "koneksi_db.php";
        ?>
        <section>
            <?php
            $kat = $_GET['pilihan'];
            ?>
        </section>
        <?php
            $queri = "select * from tb_barang".$kat;
            $hasil = mysqli_query($koneksi, $queri);
            while ($data = mysqli_fetch_array($hasil)) {
                echo "<tr><form method='POST' id='edit'><th id='".$data['id_barang']."'>" .$data['id_barang']. "</th><td>" .$data['nama_barang']. "</td><td>" .$data['kategori_barang']. "</td><td><input type='number'></input></form><button onclick='t()' id='tambah'>+</button></td></tr>";

            }
        ?>
    </table>
    <script>
        function t() {
            var tam = $("#edit").serialize();

            $.ajax({
                type : "POST",
                dataType : "html",
                url : "edit.php",
                data : tam,
                success : function(data) {
                    $("#berhasil").html(data);
                }
            });
        };
    </script>
</body>
</html>