<html>
<head>
    <title>Login</title>

    <?php
        include "koneksi_db.php";
    ?>
</head>
<body>
<h1>Log In</h1>
<form action="inventaris.php" method="POST" id="formd">
<table>
    <tr>
        <td>Username</td>
        <td> : </td>
        <td><input type="text" id="user" name="user"></input></td>
    </tr>
    <tr>
        <td>Password</td>
        <td> : </td>
        <td><input type="password"  id="pass" name="pass"></input></td>
    </tr>
    <tr>
        <!--mengaktifkan isset-->
        <td><input type="submit" name="log" value="login"></td>
        <!--button untuk kembali-->
        <td><button><a href="user.php">Kembali</a></button></td>
    </tr>
</table>
</form>

<script>
    //mengirim data form ke database
    <?php
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = "select * from user where Username = '$user' and Password = '$pass'";
        $hasil = mysqli_query($koneksi, $sql);
        $array = mysqli_fetch_array($hasil);
        $cek = mysqli_num_rows($hasil);

        if ($cek==1) {
            ?>
            alert ("anda login yay");
            <?php
        }
        else {
    ?>
            alert ("Username atau Password tidak valid. Kembali");
            window.location.href = 'Login.php';
    <?php
        }
    ?>
</script>
</body>
</html>