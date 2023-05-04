<?php
    include "koneksi_db.php";

    $user = $_POST['nama'];
    $pass = $_POST['sandi'];

    $user = stripcslashes($user);
    $pass = stripcslashes($pass);
    $user = mysqli_real_escape_string($koneksi, $user);
    $pass = mysqli_real_escape_string($koneksi, $pass);

    $sql = "select * from user where Username = '$user' and Password = '$pass'";
    $hasil = mysqli_query($koneksi, $sql);
    $array = mysqli_fetch_array($hasil);
    $cek = mysqli_num_rows($hasil);

    if ($cek==1) {
        echo "anda login yay";
    }
    else {
?>

<script type="text/javascript">
    alert ("Username atau Password tidak valid. Kembali");
    window.location.href = 'Login.php';
</script>

<?php
    }
?>