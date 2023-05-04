<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Master Barang</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/st.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
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
      </div>
    </div> 
    </nav>

    <section>
      <div class="diatas-barang">
        <div class="menubarang">
            <div class="menbar" style="background-color: red;">
              <ion-icon name="qr-code"></ion-icon>
              <div class="text2">Pengajar</div> 
            </div>
            <div class="menbar" style="background-color: #00E309">
              <ion-icon name="qr-code"></ion-icon>
              <div class="text2">Barang</div> 
            </div>
            <div class="menbar" style="background-color: #003BD1">
              <ion-icon name="qr-code"></ion-icon>
              <div class="text2">Transaksi</div> 
            </div>
        </div>      
      </div>
    </section>
    <section>
      <!--Table tansaksi PHP-->
      <div class="transaksi-table">
        <div class="table-barang">
          <div class="tekx">Daftar Barang</div>
          <div class="garis"></div>
          <div>
            <button><a href="formtambah.php">Tambah</a></button>
          </div>
          <div class="table">
            <table border="1" style="width: 100%;">
              <tr>
                <th>#</th>
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>stok</th>
                <th colspan="2">Aksi</th>
              </tr>
              <?php
                include "proses/koneksi_db.php";

                $no = 1;
                
    
                $queri = "select * from tb_barang";
                $hasil = mysqli_query($koneksi, $queri);
                while ($data = mysqli_fetch_array($hasil)) {
                    echo "<tr><th>" .$no. "</th>
                    <td>" .$data['id_barang']. "</td>
                    <td>" .$data['nama_barang']. "</td>
                    <td>" .$data['kategori_barang']. "</td>
                    <td>" .$data['stok']. "</td>
                    <td><a href='formubah.php?id=$data[id_barang]'>ubah</a></td>
                    <td><a href='?id=$data[id_barang]'>hapus</a></td>
                    </tr>";
    
                    $no++;
                }
              ?>

            <!--penghapusan baris data dari database-->
            <?php
                if (isset($_GET['id'])) {
                    mysqli_query($koneksi, "delete from tb_barang where id_barang = '$_GET[id]'");

                    echo "Data terhapus";
                }
            ?>
            </table>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
