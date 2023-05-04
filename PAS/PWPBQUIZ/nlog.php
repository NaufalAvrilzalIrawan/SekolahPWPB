<html>
<body>
<form action="" onclick="cek()" method="post" name="masuk" id="masuk">
<table>
    <tr>
        <td>Username</td>
        <td> : </td>
        <td><input type="text" name="user" id="user"></input></td>
    </tr>
    <tr>
        <td>Password</td>
        <td> : </td>
        <td><input type="password" name="pass" id="pass"></input></td>
    </tr>
</table>
</form>
<button type="submit" name="login" id="login">Login</button>
</body>
<script>
    <?php
        include "koneksi_db.php";

            if (isset($_POST['login'])) {

                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $user = stripcslashes($user);
                $pass = stripcslashes($pass);
                $user = mysqli_real_escape_string($koneksi, $user);
                $pass = mysqli_real_escape_string($koneksi, $pass);

                $sql = "select * from user where Username = '$user' and Password = '$pass'";
                $hasil = mysqli_query($koneksi, $sql);
                $array = mysqli_fetch_array($hasil);
                $cek = mysqli_num_rows($hasil);

                if ($cek==1) {
        ?>
                    alert ("anda masuk");
        <?php
                }
                else {
        ?>
                    alert ("Username atau Password tidak valid. Kembali");
                    window.location.href = 'logain.php';
        <?php
                }
            }
        ?>
</script>
</html>