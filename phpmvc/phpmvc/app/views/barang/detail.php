<div class="container">
    <div class="jumbotron mt-4">
        <h1>Detail Barang</h1>
        <h2><?= $data['barangs']['Nama_Barang'] ?></h2>

        <hr class="my-4">

        <h4 class="lead"><b>Kategori : </b><?= $data['barangs']['Kat_Barang'] ?></h4>
        <h4 class="lead"><b>Harga : </b> RP. <?= $data['barangs']['Harga_Barang'] ?></h4>
        <a href="<?= BASEURL; ?>/about/page"><button type="button" class="btn btn-outline-success">Selengkapnya</button></a>
    </div>
</div>