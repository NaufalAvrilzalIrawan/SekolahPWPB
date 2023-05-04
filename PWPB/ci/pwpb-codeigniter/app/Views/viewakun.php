<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PWPB CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>View CodeIgniter</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Hobi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach ($alldatamodel as $row) : ?>
        <tr>

            <td><?= $row->id ?></td>
            <td><?= $row->nama ?></td>
            <td><?= $row->email ?></td>
            <td><?= $row->hobi ?></td>
            <td><a href="<?= base_url('update').'/'.$row->id?>" class="btn btn-primary">Edit</a></td>
            <td><a href="<?= base_url('delete').'/'.$row->id?>" class="btn btn-primary">Hapus</a></td>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br>
<a href="<?= base_url('create')?>" class="btn btn-primary">Tambah</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>