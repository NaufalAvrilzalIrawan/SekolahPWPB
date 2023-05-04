<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
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
                <h1 class="pageheader">Form peminjaman</h1>
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
                                        <label> Kode Pinjam</label>
                                        <input type="text" name="kode" class="form-control" value="<?php echo $kode;?>" readonly>
                                    </div>
                                    <div class="form-grup">
                                        <label>Kategori Barang</label>
                                        <select name="kategori_barang" id="pik" class="form-control">
                                            <option value="">Pilih Kategori</option>
                                            <option value="alat">Alat</option>
                                            <option value="zat kimia">Zat Kimia</option>
                                        </select>
                                    </div>
                                    <div class="form-grup">
                                        <label >Nama Barang</label>
                                        <select name="nama_barang" id="" class="form-control">
                                            <option value="">Pilih Barang</option>
                                                <?php
                                                    $kat = $_POST['pik'];

                                                    $queri = "select * from tb_barang";
                                                    $hasil = mysqli_query($koneksi, $queri);
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        echo "<option value='".$data['nama_barang']."'>".$data['nama_barang']."</option>";

                                                    }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="form-barang">
                                        <label>Jumlah pinjam</label>
                                        <input type="number" class="form-control" placeholder="Masukan Jumlah " name="jumlah">
                                    </div>
                            </div>
                            <div class="pageform">
                                <div class="form-barang">
                                    <label> Nama Peminjam</label>
                                    <input type="text" class="form-control" name="nama_peminjam">
                                </div>
                                <div class="form-grup">
                                    <label>Tanggal Pinjam</label>
                                    <input type="date" placeholder="tanggal pengembalian" class="form-control" name="waktup">
                                </div>
                                <div class="form-grup">
                                    <label for="">Tanggal Pengembalian</label>
                                    <input type="date" placeholder="Tanggal pengembalian" class="form-control" name="waktuk">
                                </div>
                                <div class="form-grup">
                                    <label for="">Keterangan</label>
                                    <select name="keterangan" id="" class="form-control">
                                        <option value="">Keterangan</option>
                                        <option value="sedang dipinjam">Sedang di pinjam</option>
                                    </select>
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
            include "koneksi_db.php";

            if (isset($_POST['masuk'])) {
                
                $kode = $_POST['kode'];
                $namb = $_POST['nama_barang'];
                $kate = $_POST['kategori_barang'];
                $juml = $_POST['jumlah'];
                $namp = $_POST['nama_peminjam'];
                $wakp = $_POST['waktup'];
                $wakk = $_POST['waktuk'];
                $kete = $_POST['keterangan'];

                $pid = mysqli_query($koneksi, "select id_barang from tb_barang where nama_barang = '".$namb."'");
                $did = mysqli_fetch_array($pid);

                $kirim = "INSERT INTO transaksi(KodePinjam, IdBarang, KodeKategori, NamaBarang, JumlahBarang, NamaPeminjam, WaktuPinjam, WaktuKembali, Keterangan) VALUES ('".$kode."','".$did['id_barang']."','".$kate."','".$namb."','".$juml."','".$namp."','".$wakp."','".$wakk."','".$kete."')";

                echo "<script>alert ('data telah tersimpan')";

                $masuk = mysqli_query($koneksi, $kirim);

                if ($kirim){
                    echo "masuk mas";
                }
                else {
        ?>
                    alert ('not yet');
        <?php
                }
            }
        ?>
    </script>
    </body>
</html>
