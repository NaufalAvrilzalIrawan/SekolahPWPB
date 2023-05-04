<!DOCTYPE html>
<html>
<head>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="bootstrap.css" rel="stylesheet">
<?php
$tgl = date("l jS \of F Y h:i:s A");
$nota = random_int(0, 1000);
include "koneksi_db.php";
$queri ="select * from barang";
$hasil= mysqli_query($koneksi, $queri);
?>
</head>
<body style="margin : 10px;">
<div>
<br>
<center>
<h1>Toko saya</h1>
</center>
<br>
</div>

<form method="post" id="genjutsu">
<p>Tanggal : <?php echo $tgl;?></p>
<input type="hidden" value="<?php echo $tgl;?>" name="tanggal">
<p>No Nota : <?php echo $nota?></p>
<input type="hidden" value="<?php echo $nota;?>" name="nota">
<p>Nama Barang : <select name="kd_barang" id="bar">
<option value="">Pilih barang</option>
<?php
	$queri ="select * from barang";
	$hasim= mysqli_query($koneksi, $queri);
	while($datar = mysqli_fetch_array($hasim)){
		echo "<option value='".$datar['Kd_Barang']."'>".$datar['Nama_Barang']."</option>";
	}
		
?>

</select></p>
<p>Harga : <text id="hrg">Harga akan tampil disini</text></p>
<p>Jumlah beli : <input type="number" name="jumlah" min="1" id="jumlah"></p>

</form>
<br>
<button id="tanam">Ok</button>

<br>

<div id="portal"></div>

<script>


	$("#bar").change(function(){
		//variabel dari nilai barang
		var kd_bar = $("#bar").val();
		
		//Menggunakan ajax untuk mengirim dan menerima data harga sebuah barang. ayok bisa yok
		$.ajax({
			type: "POST",
			dataType: "html",
			url: "ambil-data-harga.php",
			data: "kd_barang="+ kd_bar,
			success: function(data) {
				$("#hrg").html(data);
			}
		});
	});
		
		
		
	$("#tanam").click(function(){
		var kd_bar = $("#hrg").html();
		var jumb = $("#jumlah").val();
		if (kd_bar.match("Harga akan tampil disini") || jumb == 0){
			alert("Mohon masukan nilai yang valid!!");
		}
		else{
			//variabel dari form
			var semua_isi_form = $("#genjutsu").serialize();
			
			//bismillah, semoga lancar ngodingnya, latom`
			$.ajax({
				type: "POST",
				dataType: "html",
				url: "ambil-data.php",
				data: semua_isi_form,
				success: function(data) {
					$("#portal").html(data);
			
				}
			});
		}
	});
	
	//Yeay!! error ya? wkwkwk
</script>
</body>
</html>
