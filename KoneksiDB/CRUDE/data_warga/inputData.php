<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Internet Browser mereun-->
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh">
    <link rel="stylesheet" href="css/bootsrap.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    

    <?php
        include "koneksi_db.php";
        $sql = mysqli_query($koneksi, "select * from data_warga");
        $data = mysqli_fetch_array($sql);

    ?>
</head>
<body>
<form action="" method="post" id="haram">
<table style="text-align:left;">
    <tr style="text-align:left;">
        <td>NIK</td>
        <td> : </td>
        <td><input type="number" name="nik" required></td>
    </tr>
    <tr style="text-align:left;">
        <td>Nama</td>
        <td> : </td>
        <td><input type="text" name="nam" required></td>
    </tr>
    <tr style="text-align:left;">
        <td>Tempat Tanggal Lahir</td>
        <td> : </td>
        <td><input type="text" name="tmp" required><input type="date" name="tgl" required></td>
    </tr>
    <tr style="text-align:left;">
        <td>Agama</td>
        <td> : </td>
        <td>
            <select name="agm">
                <option value="Islam">Islam</option>
                <option value="Protestan">Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghuchu">Konghuchu</option>
            </select>
        </td>
    </tr>
    <tr style="text-align:left;">
        <td>Pekerjaan</td>
        <td> : </td>
        <td><input type="text" name="pkj" required></td>
    </tr>
    <tr style="text-align:left;">
        <td>Alamat</td>
        <td> : </td>
        <td><input type="textfield" name="alt" required></td>
    </tr>
    <tr style="text-align:left;">
        <td>No. Handphone</td>
        <td> : </td>
        <td><input type="number" name="nhp" required></td>
    </tr>
    <tr style="text-align:left;">
        <td>Email</td>
        <td> : </td>
        <td><input type="text" name="ema" required></td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="masuk" value="MASUK">
            <input type="submit" name="ubah" value="UBAH">
            <input type="submit" name="batal" value="BATAL">
        </td>
    </tr>
</table>
</form>
<hr>
</div>

        <?php
            if (isset($_POST['masuk'])) {
                $nik = $_POST['nik'];
                $nam = $_POST['nam'];
                $tmp = $_POST['tmp'];
                $tgl = $_POST['tgl'];
                $agm = $_POST['agm'];
                $pkj = $_POST['pkj'];
                $alt = $_POST['alt'];
                $nhp = $_POST['nhp'];
                $ema = $_POST['ema'];
                $cock = mysqli_num_rows(mysqli_query($koneksi, "SELECT * from data_warga WHERE nik=$nik"));
                if($cock > 0){
                    echo "<script> alert('NIK Sudah Ada');</script>";}

                    else{
            
                mysqli_query ($koneksi,"INSERT INTO data_warga VALUES ('$nik','$nam','$alt','$pkj','$tmp / $tgl','$agm','$nhp','$ema')");
                echo "<script> alert('Data Baru Telah Ditambahkan');</script>";}
            }
            else {
              echo "ngotak";
            }

            
        ?>

        <table border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>Nama Warga</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Agama</th>
                <th>No Handphone</th>
                <th>Email</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
                $no = 1;
                $queri = "select * from data_warga";
                $hasil = mysqli_query($koneksi, $queri);

                while ($data = mysqli_fetch_array($hasil)) {
            ?> 
                    <tr><th> <?php echo $no; ?> </th>
                    <td> <?php echo $data['nik']; ?></td>
                    <td> <?php echo $data['nama']; ?></td>
                    <td> <?php echo $data['alamat']; ?></td>
                    <td> <?php echo $data['pekerjaan']; ?></td>
                    <td> <?php echo $data['ttl']; ?></td>
                    <td> <?php echo $data['agama']; ?></td>
                    <td> <?php echo $data['hp']; ?></td>
                    <td> <?php echo $data['email']; ?></td>
                    <td> <?php echo "<a href='inputUbah.php?nik=$data[nik]'>"?><input type="submit" name="ubah" value="ubah"></a></td>
                    <td> <?php echo "<a href='?nik=$data[nik]'>"?><input type="submit" name="hapus" value="hapus"></a></td>
                    </tr>

            <?php
                    $no++;
                }
            ?>

            <!--penghapusan baris data dari database-->
            <?php
                if (isset($_GET['nik'])) {
                    mysqli_query($koneksi, "delete from data_warga where nik = '$_GET[nik]'");

                    echo "echo <script> alert('Data Telah Terhapus');</script>";
                }
            ?>


</body>
</html>