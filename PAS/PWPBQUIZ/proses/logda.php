<?php
                include "koneksi_db.php";

                if (isset($_POST['masuk'])) {

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
                        <script>alert ("anda masuk");</script>
            <?php
                    }
                    else {
            ?>
                    <script>
                        alert ("Username atau Password tidak valid. Kembali");
                        window.location.href = 'logain.php';
                    </script>
            <?php
                    }
                }
            ?>