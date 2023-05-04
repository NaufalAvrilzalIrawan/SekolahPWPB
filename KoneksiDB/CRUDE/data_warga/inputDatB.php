<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--Internet Browser mereun-->
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
<div class="container">
<h1 atyle="text-align:center;">INPUT DATA WARGA</h1>
<form action="" method="post" id="haram">
    <div class="form-group">
        <label>NIK</label>
        <input type="number" name="nik" required class="form-control">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nam" required class="form-control">
    </div>
    <div class="form-row">
        <label>Tempat Tanggal Lahir</label>
        <div class="col"><input type="text" name="tmp" class="form-control" class="form-control"></div><div class="col"><input type="date" name="tgl" class="form-control"></div>
    </div>
    <div class="form-group">
        <label>Agama</label>
            <select name="agm" class="form-control">
                <option value="Islam">Islam</option>
                <option value="Protestan">Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghuchu">Konghuchu</option>
            </select>
    </div>
    <div class="form-group">
        <label>Pekerjaan</label>
        <input type="text" name="pkj" class="form-control">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="textfield" name="alt" class="form-control">
    </div>
    <div class="form-group">
        <label>No. Handphone</label>
        <input type="number" name="nhp" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="ema" class="form-control">
    </div>
        <input type="submit" name="masuk" value="MASUK" class="btn btn-primary">
        <input type="submit" name="reset" value="RESET" class="btn btn-warning">

</form>
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
                    echo "<script> alert('ngotak');</script>";
                }

                if (isset($_POST['reset'])) {
                    echo "<script>alert('BITE THE DUST');</script>";
                    echo "<script>window.location.replace('inputDatB.php') </script>";
                }
        ?>

<div class="container">

<hr>
    <h1>DATA WARGA</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
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
            </thead>
            <tbody>
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
                    <td> <?php echo "<a href='inputUbaB.php?nik=$data[nik]'>"?><input type="submit" name="ubah" value="ubah" class="btn btn-primary"></a></td>
                    <td> <?php echo "<a href='?nik=$data[nik]'>"?><input type="submit" name="hapus" value="hapus" class="btn btn-primary"></a></td>
                    </tr>
                

            <?php
                    $no++;
                }
            ?>
            </tbody>

</div>

            <!--penghapusan baris data dari database-->
            <?php
                if (isset($_GET['nik'])) {
                    mysqli_query($koneksi, "delete from data_warga where nik = '$_GET[nik]'");

                    echo "echo <script> alert('Data Telah Terhapus');</script>";
                }
            ?>


</body>
</html>