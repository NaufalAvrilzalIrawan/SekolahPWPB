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
        $sql = mysqli_query($koneksi, "select * from data_warga where nik='$_GET[nik]'");
        while ($data = mysqli_fetch_array($sql)){
            $data['ttl'] = explode(" ", $data['ttl']);
        
        
    ?>
</head>
<body>
<div class="container">
<h1>EDIT DATA WARGA</h1>
<form action="" method="post" id="haram">
    <div class="form-group">
        <label>NIK</label>
        <input type="number" name="nik" value="<?php echo $data['nik']?>" required class="form-control">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nam" value="<?php echo $data['nama']?>" class="form-control">
    </div>
    <div class="form-row">
        <label>Tempat Tanggal Lahir</label>
        <div class="col"><input type="text" name="tmp" value="<?php echo $data['ttl'][0];?>" class="form-control"></div>
        <div class="col"><input type="date" name="tgl" value="<?php echo $data['ttl'][2];?>" class="form-control"></div>
    </div>
    <div class="form-group">
        <label>Agama</label>
            <select name="agm" class="form-control">
                <option <?php echo ($data['agama'] == 'Islam') ? "selected":""?>>Islam</option>
                <option <?php echo ($data['agama'] == 'Protestan') ? "selected":""?>>Protestan</option>
                <option <?php echo ($data['agama'] == 'Katolik') ? "selected":""?> >Katolik</option>
                <option <?php echo ($data['agama'] == 'Hindu') ? "selected":""?> >Hindu</option>
                <option <?php echo ($data['agama'] == 'Buddha') ? "selected":""?> >Buddha</option>
                <option <?php echo ($data['agama'] == 'Konghuchu') ? "selected":""?> >Konghuchu</option>
            </select>
    </div>
    <div class="form-group">
        <label>pekerjaan</label>
        <input type="text" name="pkj" value="<?php echo $data['pekerjaan']?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="textfield" name="alt" value="<?php echo $data['alamat']?>" class="form-control">
    </div>
    <div class="form-group">
        <label>No. Handphone</label>
        <input type="number" name="nhp" value="<?php echo $data['hp']?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="ema" value="<?php echo $data['email']?>" class="form-control">
    </div>
            <input type="submit" name="ubah" value="UBAH" class="btn btn-primary">
            <input type="submit" name="batal" value="BATAL" class="btn btn-warning">
        
</form>
</div>
<?php }?>
<hr>
</div>
<?php
    if (isset($_POST['ubah'])) {
        mysqli_query ($koneksi, "update data_warga set
        nik = '$_POST[nik]',
        nama = '$_POST[nam]',
        alamat = '$_POST[alt]',
        pekerjaan = '$_POST[pkj]',
        ttl = '$_POST[tmp] / $_POST[tgl]',
        agama = '$_POST[agm]',
        hp = '$_POST[nhp]',
        email = '$_POST[ema]'
        where nik = '$_GET[nik]'");

        echo "<script>alert('Data Telah Diubah');</script>";
        echo "<script>alert('Kembali ke Laptop');</script>";
        echo "<script>window.location.replace('inputDatB.php') </script>";
    }

    if (isset($_POST['batal'])) {
        echo "<script>alert('Kembali ke Komputer');</script>";
        echo "<script>window.location.replace('inputDatB.php') </script>";
    }
?>
</body>
</html>