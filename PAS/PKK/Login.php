<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-image: url("source/rakbuku.jpeg");
            background-repeat: no-repeat;
            background-size: 100%;
            margin: 20vh;
            margin-left: 50vh;
        }
        div {
			width: 600px;
		}
		.bo {
			border: 2px solid black;
            background-color: rgba(255, 255, 255, 0.8);
        
		}
        table {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="bo">
    <form action="Formulir.php" method="post">
    <center>

    <table cellpadding="5" border="0">
        <h1 style="text-align:center;">LOGIN</h1>
        <tr></tr>
        <tr>
            <!--input username-->
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="user" id="user" placeholder="Masukan Username Anda"></input></td>
        </tr>
        <tr>
            <!--input password-->   
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="pass" id="pass" placeholder="Masukan Password Anda"></input></td>
        </tr>
        <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<tr>
            <!--input semua data-->
            <td colspan="3" align="center"><input type="submit" name="login" value="Login"></td>
        </tr>
    </table>

    </center>    
    </form>
    </div>
</body>
</html>