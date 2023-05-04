<?php

    include "koneksi_db.php";

    $usernem = $_POST['un'];
    $peswed = $_POST['pw'];

    $usernem = stripcslashes($usernem);
    $peswed = stripcslashes($peswed);
    $usernem = mysqli_real_escape_string($koneksi, $usernem);
    $peswed = mysqli_real_escape_string($koneksi, $peswed);

    $sql="select * from user_data where username = '$usernem' and pswd = '$peswed'";
    $hasil= mysqli_query($koneksi,$sql);
    $array= mysqli_fetch_array($hasil);
    $cek= mysqli_num_rows($hasil);

    if($cek==1){
        echo "<h2><center> Anda Telah Berhasil Login </center></h2>";
    }
    else{
        ?>
        <script type="text/javascript">
            alert("Username atau Password Tidak Valid, Kembali");
            window.location.href='login.php';
        
            </script>
        <?php
    }
    ?>