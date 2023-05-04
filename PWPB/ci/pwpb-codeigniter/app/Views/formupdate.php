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
    <h1>Edit Data</h1>
    <form action="<?= base_url('updatedata') ?>" method="POST">
    <input type="hidden" class="form-control" id="id" name="id" value="<?= $dataakun -> id ?>">
    <div class="mb-3">
  <label for="nama" class="form-label">Nama</label>
  <input type="text" class="form-control" id="nama" name="nama" value="<?= $dataakun -> nama ?>">
    </div>

    <div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" name="email" value="<?= $dataakun -> email ?>">
    </div>

    <div class="mb-3">
  <label for="hob" class="form-label">Hobi</label>
  <input type="text" class="form-control" id="hobi" name="hobi" value="<?= $dataakun -> hobi ?>">
    </div>
    <div class="mb3">
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>