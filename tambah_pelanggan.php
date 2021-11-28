<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Pelanggan</title>
  </head>
  <body>
      <div class="card card-body">
        <b><h3 align="center">PELANGGAN</h3></b>
          <form action="proses_tambah_pelanggan.php" method="post" enctype="multipart/form-data">
          <br>
          &emsp;Nama Pelanggan
          <input type="text" name="nama_pelanggan" value="" class="form-control" placeholder="Masukkan Nama Pelanggan" required>
          <br>  
          &emsp;Alamat
          <input type="text" name="Alamat" value="" class="form-control" placeholder="Masukkan Alamat Pelanggan" required>
          <br>  
          &emsp;Telepon 
          <input type="text" name="password" value="" class="form-control" placeholder="Masukkan No Telepon Pelanggan" required>
          <br>
		    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          		<input type="submit" name="simpan" value="Tambah Pelanggan" class="btn btn-outline-primary">
		    </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          </form>
      </div>
  </body>
</html>
