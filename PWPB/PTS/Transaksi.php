<!DOCTYPE HTML>
<html>
<head>
    <title>Transaksi</title>
    <style>
        body {
            background-image: url("https://getwallpapers.com/wallpaper/full/8/b/6/1334861-best-4k-wallpapers-3840x2160-meizu.jpg");
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
    <form action="info.php" method="post">
    <center>
    <div class="bo">
    <h1 style="text-align:center;">Transaksi</h1>
    <table cellpadding="5">
        <h1 style="text-align:center;">Kolom Setor</h1>
        <tr>
            <!--input nama-->
            <td>Pilih Rekening</td>
            <td>:</td>
            <td><select name="rekening" placeholder="Pilih Rekening">
                <option>5724581</option>
                <option>8927347</option>
                <option>2048657</option>
                <option>9583790</option>
                <option>7093281</option>
            </select></td>
        </tr>
        <tr>
            <!--input alamat-->   
            <td>Bank</td>
            <td>:</td>
            <td><select name="bank" placeholder="Pilih Rekening">
                <option>BCA</option>
                <option>BJB</option>
                <option>BNI</option>
                <option>Mandiri</option>
                <option>Cimb Niaga</option>
                <option>BRI</option>
                <option>UOB</option>
            </select></td>
        </tr>
        <tr>
            <!--input rekening tujuan-->
            <td>Rekening Tujuan</td>
            <td>:</td>
            <td><input type="text" name="tujuan" placeholder="Rekening Tujuan"></input>
        </tr>
        <tr>
            <!--input rekening tujuan-->
            <td>Nominal</td>
            <td>:</td>
            <td><input type="text" name="nominal" placeholder="RP"></input>
        </tr>
        <tr>
            <!--input catatan-->
            <td>Catatan</td>
            <td>:</td>
            <td><input type="text" name="catatan" placeholder="catatan"></input>
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