<!DOCRYPE html>
<html>
<head>

</head>
<body>
<form>
    <p id="tgl">Tanggal :</p>
    <p id="nota">No. Nota :</p>
    <p id="brg">Nama Barang :
        <select name="barang" id="pilih" onchange="har()">
            <option value="">Pilih Barang</option>
            <?php
            include "koneksi_db.php";

            $queri = "select * from barang";
            $hasil = mysqli_query($koneksi, $queri);
            while ($data = mysqli_fetch_array($hasil)) {
                echo "<option value=" . $data['HargaBarang'] . ">" . $data['NamaBarang'] . "</option>";
            }
            ?>
        </select>
    </p>
    <p id="hrg">Harga : <text id="cicing"></text></p>
    <p id="jml">Jumlah Beli :<input type="number"></input></p>
</form>
<button>Cek</button>
<hr>

<table border="1" cellpadding="0">
    <tr>
        <th></th>
    </tr>
</table>

<script>
    //memunculkan keterangan waktu
    document.getElementById("tgl").innerText += Date();

    //memanggil dan memunculkan data harga barang dari database
    function har(){
        document.getElementById("cicing").innerText = document.getElementById("pilih").value;
    }

    //membuat nota acak
    document.getElementById("nota").innerText += Math.floor(Math.random() * 5000);
</script>
</body>
</html>