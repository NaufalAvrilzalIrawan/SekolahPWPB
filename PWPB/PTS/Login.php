<!DOCTYPE HTML>
<html>
<head>
    <!--judul tab-->
    <title>LOGIN</title>
    <!--CSS-->
    <style>
        body {
            background-image: url("https://i.pinimg.com/originals/7f/c1/9e/7fc19e20144b5d81dec12595e30f84c5.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            margin-top: 40vh;
        }
        div {
			width: 550px;
            height: 250px;
		}
		.bo {
			border: 2px solid black;
            background-color: white;
		}
    </style>
</head>
<body>
    <!--Judul Form-->
    <form action="Proses.php" method="post">
    <center>
    <div class="bo">
    <h1 style="text-align:center;">FORM LOGIN</h1>
    <table cellpadding="5">
        <tr>
            <!--input username-->
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder=""></input></td>
        </tr>
        <tr>
            <!--input password-->   
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder=""></input></td>
        </tr>
        <tr>
            <!--input semua data-->
            <td colspan="3" align="right"><input type="submit" name="submit" value="Login"></td>
        </tr>
        <tr>
            <!--Pindah Form Daftar-->
            <td><a href="Daftar.php">Buat Akun</a></td>
        </tr>
        <tr></tr>
    </table>
    </center>    
    </form>
</body>
</html>