<!DOCTYPE HTML>
<html>
<head>
    <title>Daftar</title>
    <style>
        body {
            background-image: url("https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/2/tower-of-babel-hendrik-van-cleve.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            margin-top: 20vh;
        }
        div {
			width: 550px;
		}
		.bo {
			border: 2px solid black;
            background-color: white;
		}
    </style>
</head>
<body>
    <form action="ProD.php" method="post">
    <center>
    <div class="bo">
    <h1 style="text-align:center;">FORM DAFTAR</h1>
    <table cellpadding="5">
        <tr>
            <!--input username-->
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Masukan Username"></input></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td style="color:red;">*Username Telah Digunakan</td>
        </tr>
        <tr>
            <!--input password-->   
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="Masukan Password"></input></td>
        </tr>
        <tr>
            <!--input ulang password-->   
            <td>Konfirmasi Password</td>
            <td>:</td>
            <td><input type="password" name="upassword" placeholder="Masukan Konfirmasi Password"></input></td>
        </tr>
        <tr>
            <!--input nama-->
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Masukan Nama"></input></td>
        </tr>
        <tr>
            <!--input TTL-->
            <td>Tempat/Tgl Lahir</td>
            <td>:</td>
            <td>
            <!--input tempat lahir-->
			<input type="text" name="tempat" placeholder="Masukan Tempat Lahir"></input>/
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
            <!--input nomer handphone-->
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" placeholder="Masukan Alamat"></textarea></td>
		</tr>
		<tr>
            <!--input semua data-->
            <td colspan="3" align="right"><input type="submit" name="submit" value="Daftar"></td>
        </tr>
    </table>
    </center>    
    </form>
</body>
</html>