<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Transaksi</title>
  </head>
  <body>
      <div class="card card-body">
        <b><h3 align="center">TRANSAKSI</h3></b>
          <form action="proses_transaksi.php" method="post">

          &emsp;Nama Lengkap 
          <input type="text" name="nama" value="" class="form-control" placeholder="Masukkan Nama Lengkap" required>
          <br>
          &emsp;Alamat
          <input type="text" name="alamat" value="" class="form-control" placeholder="Masukkan Alamat" required>
          <br>
          &emsp;Nomor Telepon
          <input type="text" name="telp" value="" class="form-control" placeholder="Masukkan No Telepon" required>
          <br>
          &emsp;Username
          <input type="text" name="username" value="" class="form-control" placeholder="Masukkan Username" required>
          <br>
          &emsp;Password
          <input type="text" name="password" value="" class="form-control" placeholder="Masukkan Password" required>

          &emsp;
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <input type="submit" value="Transaksi" class="btn btn-outline-primary">
              <a href="login.php" class="btn btn-outline-success" >Login</a>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          </form>
      </div>
</body>
</html>