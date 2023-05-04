<?php
    include "koneksi_db.php";

    //mengubah data di form login
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $user = stripcslashes($user);
    $pass = stripcslashes($pass);
    $user = mysqli_real_escape_string($koneksi, $user);
    $pass = mysqli_real_escape_string($koneksi, $pass);

    //pemanggilan data di database
    $sql = "select * from user where Username = '$user' and Password = '$pass'";
    $hasil = mysqli_query($koneksi, $sql);
    $array = mysqli_fetch_array($hasil);
    $cek = mysqli_num_rows($hasil);

    //pemeriksaan data form
    if ($cek==1) {
        echo "Selamat Kembali '$user'";
    }
    else {
?>
        <script type="text/javascript">
            alert ("Username atau Password tidak valid. Kembali");
            window.location.href = 'logain.php';
        </script>
<?php
    }
?>