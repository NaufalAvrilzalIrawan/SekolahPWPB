<div class="container mt-5">
    <div class="row">
        <h3>Daftar Barang</h3>
        <?php foreach( $data['barangs'] as $barang) :?>
            <ul>
                <li><b><?= $barang['ID'] ?></b></li>
                <li>Nama : <?= $barang['Nama_Barang'] ?></li>
                <li>Harga : <?= $barang['Harga_Barang'] ?></li>
            </ul>
        <?php endforeach; ?>
    </div>
</div>