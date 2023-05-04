<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<?php
    include "koneksi.php";
    $sql_brg="select * from detail_barang;";
    $data_barang=mysqli_query($koneksi,$sql_brg);
?>
<form action="proses.php" method="post">
    Tanggal : <?php echo date("l jS \of F Y h:i:s A"); ?> <br />
    No. Nota : <?php echo random_int(0,1000); ?><br />
    
    Nama Barang : 
    <select name="barang" id="kode_brg" >
    <option value="">Pilih barang</option>
    <?php
        while($d_brg=mysqli_fetch_array($data_barang)){
    ?>
        <option value="<?php echo $d_brg['kd_brg']; ?>"><?php echo $d_brg['nama_brg']; ?></option>
    <?php
        }
    ?>
    </select>
    <div id="harga">Harga : </div>
    Jumlah beli : <input type="text" name="pangaos">
    <input type="submit" value="Simpan">
    </select>
</form>
<div id="tampil"><?php include "tampilin.php" ?></div>
<script>
            $("#kode_brg").change(function() {
                // variabel dari nilai barang
                var kd_brg = $("#kode_brg").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "ambil-data.php",
                    data: "kd_barang=" + kd_brg,
                    success: function(data) {
                        $("#harga").html(data);
                    }
                });
            });
</script>
</html>