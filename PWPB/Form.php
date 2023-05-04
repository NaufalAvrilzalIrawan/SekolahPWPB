<!DOCTYPE HTML>
<html>
<head>
    <title>Formulir:)</title>
</head>
<body>
    <h1 style="text-align:center;">FORM</h1>
    <form action="Formulir.php" method="post">
    <center>
    <table cellpadding="5">
        <h1 style="text-align:center;">FORM</h1>
        <tr>
            <!--input nama-->
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Masukan Nama Anda"></input></td>
        </tr>
        <tr>
            <!--input alamat-->   
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" placeholder="Masukan Alamat Anda"></input></td>
        </tr>
        <tr>
            <!--input TTL-->
            <td>Tempat/Tgl Lahir</td>
            <td>:</td>
            <td>
            <!--input tempat lahir-->
			<input type="text" name="tempat" placeholder="Masukan Tempat Lahir Anda"></input>/
            <!--input tangal lahir-->
            <select name="tgl">
            <?php
                for ($i=1; $i <= 31; $i++) {
                echo "<option value = $i > $i </option>";
                }
            ?>
            </select>
            <!--input bulan lahir-->
			<select name="bln">
            <?php
                for ($i=1; $i <= 12; $i++) {
                echo "<option value = $i > $i </option>";
                }
            ?>
            </select>
            <!--input tahun lahir-->
			<select name="thn">
            <?php
                for ($i=1900; $i <= 2022; $i++) {
                echo "<option value = $i > $i </option>";
                }
            ?>
            </select>
			<td>
        </tr>
		<tr>
            <!--input jenis kelamin-->
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
                <!--input lakilaki-->
				<input type="radio" name="kelamin" value="Laki-laki">L</input> / 
                <!--input perempuan-->
                <input type="radio" name="kelamin" value="Bikang">P</input>
			</td>
		</tr>
		<tr>
            <!--input nomer handphone-->
			<td>Hape</td>
			<td>:</td>
			<td><input type="text" name="hp" placeholder="Masukan Nomor Handphone Anda"></input></td>
		</tr>
		<tr>
            <!--input semua data-->
            <td colspan="3" align="right"><input type="submit" name="submit" value="kirim"></td>
        </tr>
    </table>
    </center>    
    </form>
</body>
</html>