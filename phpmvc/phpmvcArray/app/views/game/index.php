<div class="container mt-5">
    <div class="row">
        <h3>Daftar Game</h3>
        <?php foreach( $data['games'] as $games) :?>
            <ul>
                <li><?= $games['nama'] ?></li>
                <li><?= $games['pengembang'] ?></li>
                <li><?= $games['penerbit'] ?></li>
                <li><?= $games['harga'] ?></li>
                <li><?= $games['waktu'] ?></li>
            </ul>
        <?php endforeach; ?>
    </div>
</div>