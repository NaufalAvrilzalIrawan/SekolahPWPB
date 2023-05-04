<html>
<head>
    <title>Signup</title>

    <?php
        include "koneksi_db.php";
    ?>
</head>
<body>
<h1>Sign Up</h1>
<form method="POST" id="formd">
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
        <td><input type="submit" name="daf" value="daftar"></td>
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

        if (isset($_POST['daf'])) {
            $sql = mysqli_query($koneksi, "insert into user
            (Username, Password, Role) 
            values ('".$user."', '".$pass."','user')");

            echo "anda telah terdaftar";
        }
    ?>
</script>
</body>
</html>