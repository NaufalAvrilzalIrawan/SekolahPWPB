<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tambah Barang</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/st.css" />
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <?php
        include "proses/koneksi_db.php";

        $kode = random_int(0, 9999);
        $tgl = date ("j F Y h:i:s A");

        $sql = mysqli_query($koneksi, "select * from tb_barang");
        $data = mysqli_fetch_array($sql);

    ?>
  </head>

  <body>
    <nav>
    <div class="container">
      <div class="navigation">
        <div class="inventaris-text">
          <img src="foto/logo.png" alt="">
            <p>Inventaris</p>
        </div>
        <div class="menu-toggle"></div>
        <ul class="list">
          <li>
            <div class="icon">
              <ion-icon name="people-outline"></ion-icon>
            </div>
              <a href="#">Master Pengajar</a>
          </li>
          <li>
            <div class="icon">
              <ion-icon name="people-outline"></ion-icon>
            </div>
            <a href="#">Master Barang</a>
          </li>
          <li>
            <div class="icon">
              <ion-icon name="people-outline"></ion-icon>
            </div>
            <a href="#">Daftar Transaksi</a>
          </li>
        </ul>
        <ul>
            <li>
                <div class="icon">
                    <ion-icon name=""></ion-icon>
                </div>
                <a href="">Log Out</a> <!--mau di ganti jadi button boleh tinggal ganti nanti urang benerin css nya-->
            </li>
        </ul>
      </div>
    </div> 
    </nav>
        
    <section>
        <div class="bg-form">
            <div class="header">
                <h1 class="pageheader">Tambah Barang</h1>
            </div>
            <div class="garis2"></div>
            <div class="bg-from2">
                <div class="panel panel-default">
                    <div class="panel-text">Input Barang</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="pageform">

                                <form action="" method="post" id="formp">
                                    <div class="form-grup">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nmb" id="nmb" class="form-control" placeholder="Masukan Nama Barang" required>
                                        
                                    </div>
                                    <div class="form-grup">
                                        <label >Kategori Barang</label>
                                        <input type="text" name="kat" id="kat" class="form-control" placeholder="Masukan Kategori Barang" required>
                                    </div>
                                    <div class="form-barang">
                                        <label>Stok Barang</label>
                                        <input type="number" name="stk" id="stk" class="form-control" placeholder="Masukan Jumlah Barang" required>
                                    </div>
                            </div>
                            <div class="pageform">
                                <div class="form-grup">
                                    <label>Tanggal</label>
                                    <input type="date" placeholder="tanggal pengembalian" class="form-control" name="waktup">
                                </div>
                                <button type="sumbit" name="masuk" id="masuk" style="background-color: #333; color: #fff;" class="btn">submit</button>
                                <a href="" class="btn btn-default">Batal</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        <?php
            $nama = $_POST['nmb'];
            $kate = $_POST['kat'];
            $stok = $_POST['stk'];

            if (isset($_POST['masuk'])) {
                mysqli_query ($koneksi, "INSERT INTO tb_barang
                (nama_barang, kategori_barang, stok) 
                VALUES ('".$nama."','".$kate."','".$stok."')");

        ?>  
                alert ("data telah tersimpan");
                echo "<meta http-equiv=refresh content=1; URL='barang.php'>";
        <?php
            }
            else {
              echo "ngotak";
            }
        ?>
    </script>
    </body>
</html>
