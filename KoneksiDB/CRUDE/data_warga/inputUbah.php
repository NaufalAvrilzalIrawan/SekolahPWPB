<html>
<head>
    <?php
        include "koneksi_db.php";
        $sql = mysqli_query($koneksi, "select * from data_warga where nik='$_GET[nik]'");
        while ($data = mysqli_fetch_array($sql)){
            $data['ttl'] = explode(" ", $data['ttl']);
        
        
    ?>
</head>
<body>
<form action="" method="post" id="haram">
<table style="text-align:left;">
    <tr style="text-align:left;">
        <td>NIK</td>
        <td> : </td>
        <td><input type="number" name="nik" value="<?php echo $data['nik']?>" required></td>
    </tr>
    <tr style="text-align:left;">
        <td>Nama</td>
        <td> : </td>
        <td><input type="text" name="nam" value="<?php echo $data['nama']?>"></td>
    </tr>
    <tr style="text-align:left;">
        <td>Tempat Tanggal Lahir</td>
        <td> : </td>
        <td>
            <input type="text" name="tmp" value="<?php echo $data['ttl'][0];?>">
            <input type="date" name="tgl" value="<?php echo $data['ttl'][2];?>">
        </td>
    </tr>
    <tr style="text-align:left;">
        <td>Agama</td>
        <td> : </td>
        <td>
            <select name="agm">
                <option <?php echo ($data['agama'] == 'Islam') ? "selected":""?>>Islam</option>
                <option <?php echo ($data['agama'] == 'Protestan') ? "selected":""?>>Protestan</option>
                <option <?php echo ($data['agama'] == 'Katolik') ? "selected":""?> >Katolik</option>
                <option <?php echo ($data['agama'] == 'Hindu') ? "selected":""?> >Hindu</option>
                <option <?php echo ($data['agama'] == 'Buddha') ? "selected":""?> >Buddha</option>
                <option <?php echo ($data['agama'] == 'Konghuchu') ? "selected":""?> >Konghuchu</option>
            </select>
        </td>
    </tr>
    <tr style="text-align:left;">
        <td>Pekerjaan</td>
        <td> : </td>
        <td><input type="text" name="pkj" value="<?php echo $data['pekerjaan']?>"></td>
    </tr>
    <tr style="text-align:left;">
        <td>Alamat</td>
        <td> : </td>
        <td><input type="textfield" name="alt" value="<?php echo $data['alamat']?>"></td>
    </tr>
    <tr style="text-align:left;">
        <td>No. Handphone</td>
        <td> : </td>
        <td><input type="number" name="nhp" value="<?php echo $data['hp']?>"></td>
    </tr>
    <tr style="text-align:left;">
        <td>Email</td>
        <td> : </td>
        <td><input type="text" name="ema" value="<?php echo $data['email']?>"></td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="ubah" value="UBAH">
            <input type="submit" name="batal" value="BATAL">
        </td>
    </tr>
</table>
</form>
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

        echo "<script>alert('data telah terubah');</script>";
        echo "<script>window.location.replace('inputData.php') </script>";
    }
?>
</body>
</html>