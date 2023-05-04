<!DOCRYPE html>
<html>
<head>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php
    //membuat variabel menggunakan php
        $tgl = date ("l j \of F Y h:i:s A");
        $dota = random_int(0, 2000);
        include "koneksi_db.php";
        $queri = "select * from barang";
        $hasil = mysqli_query($koneksi, $queri);
    ?>

    <link rel="stylesheet" type="text/css" href="indah.css">
    <style>
        
    </style>

</head>
<body>
<header class="batok">
    <h1><b>TOM<b></h1>
    <h3>Toko Otak Meledak </h3>
</header>
<div class="farm">
<form action="" method="post" id="haram">
<table style="text-align:left;">
    <tr style="text-align:left;">
        <td>Tanggal</td>
        <td> : </td>
        <td> <?php echo $tgl ?> </td>
        <input type="hidden" value="<?php echo $tgl;?>" name="tanggal">
    </tr>
    <tr>
        <td>No. Nota</td>
        <td> : </td>
        <td> <?php echo $dota ?> </td>
        <input type="hidden" value="<?php echo $dota;?>" name="nota">
    </tr>
    <tr>
        <td id="brg">Nama Barang</td>
        <td> : </td>
        <td> <select name="barang" id="pilih">
                <option value="">Pilih Barang</option>
                <?php
                while ($data = mysqli_fetch_array($hasil)) {
                    echo "<option value=" . $data['KodeBarang'] . ">" . $data['NamaBarang'] . "</option>";
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td id="hrg">Harga</td>
        <td> : </td>
        <td> <text id="cicing">Akan tampil</text> </td>
    </tr>
    <tr>
        <td>Jumlah Beli</td>
        <td> : </td>
        <td> <input type="number"  name="jumlah" min="1" id="jumlah"></input> </td>
    </tr>
</table>
</form>
<button id="kayang" class="btn henshin">Beli</button>
<hr>
</div>

<div id="core"></div>

<script>
    // memunculkan harga barang
    $("#pilih").change(function() {
        // variabel nilai barang
        var kd_brg = $("#pilih").val();

        // menggunakan ajax untuk mengirim dan menerima data dari server
        $.ajax({
            type : "POST",
            dataType : "html",
            url : "YouShallPass.php",
            data : "barang=" + kd_brg,
            success : function(data) {
                $("#cicing").html(data);
            }
        });
    });

    $("#kayang").click(function(){
		var kd_bar = $("#cicing").html();
		var jbl = $("#jumlah").val();
		if (kd_bar.match("Akan tampil") || jbl <= 0){
			alert("Mohon masukan nilai yang valid!!");
		}
		else{
			//variabel dari form
			var MagnumOpus = $("#haram").serialize();
			
			//bismillah, semoga lancar ngodingnya, latom`
			$.ajax({
				type: "POST",
				dataType: "html",
				url: "summonData.php",
				data: MagnumOpus,
				success: function(data) {
					$("#core").html(data);
			
				}
			});
		}
	});

</script>
</body>
</html>
