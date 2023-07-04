<div class="container">
    <div class="jumbotron mt-4">
        <h1>About Me</h1>
        <h2>Tentang Saya</h2>

        <hr class="my-4">

        <img src="<?= BASEURL; ?>/img/noname.png" alt="tidak ada gambar" width="200" class="rounded-circle shadow">
        <h4 class="lead"><b>HAI</b>, nama saya <?= $data['nama']; ?>, saya adalah seorang <?= $data['kerja']; ?></h4>
        <a href="<?= BASEURL; ?>/about/page"><button type="button" class="btn btn-outline-success">Selengkapnya</button></a>
    </div>
</div>
