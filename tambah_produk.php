<?php
  //include "header.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Produk</title>
  </head>
  <body>
    <div id=bg-tambah>
      <div class="card card-body">
        <b><h2 align="center">Tambah Produk</h2></b>
          <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
          <br>
          &emsp;Nama produk 
          <input type="text" name="nama_produk" value="" class="form-control" placeholder="Masukkan Nama Produk">
          <br>  
          &emsp;Deskripsi 
          <input type="text" name="deskripsi" value="" class="form-control" placeholder="Masukkan Deskripsi Produk" >
          <br>  
          &emsp;Harga 
          <input type="number" name="harga" value="" class="form-control" placeholder="Masukkan Harga Produk" >
          <br>
          &emsp;Foto Produk
          <input type="file" name="file" value="" class="form-control margin-3" >
          &emsp;
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <input type="submit" name="simpan" value="Tambah" class="btn btn-outline-primary">
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          </form>
      </div>
    </div>
  </body>
</html>