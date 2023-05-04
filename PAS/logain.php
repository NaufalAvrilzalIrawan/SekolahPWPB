<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php
    //membuat variabel menggunakan php
        include "koneksi_db.php";
        $queri = "select * from user";
        $hasil = mysqli_query($koneksi, $queri);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="soi.css">
    <title>Document</title>
</head>
<body>
    <div class="Login-box">
        <h2>Login </h2>
        <form action="masuk.php" onclick="cek()" method="post" name="login" id="login">
        
            <div class="user-box">
                <label>Username</label>
                <input type="text" name="user" id="user" required="">
            </div>

            <div class="user-box">
                <label>Password</label>
                <input type="text" name="pass" id="pass" required="">
            </div>

            <div class="button-form">
                <input type="submit" id="masuk" value="Login"></input>
            </div>
        </form>
    </div>

<script>
    function cek(){
        var username = document.login.user.value;
        var password = document.login.pass.value;

        if (username.length=="" && password=="") {
            alert ("Username dan Password kosong");
            return true;
        }

        else {
            if (username.length=="") {
                alert("Username kosong");
                return true;
            }
            
            if (username.length=="") {
                alert("Password kosong");
                return true;
            }
        }
    }
</script>
</body>
</html>