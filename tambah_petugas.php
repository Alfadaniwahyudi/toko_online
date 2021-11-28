<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Petugas</title>
</head>
<body>
	<div class="card card-body">
		<b><h3 align="center">PETUGAS</h3></b>
		<form action="proses_tambah_petugas.php" method="post" enctype="multipart/form-data">
			&emsp;Nama petugas
			<input type="text" name="nama_petugas" value="" class="form-control" placeholder="Masukkan Nama Petugas" required>
			<br>
			&emsp;Username 
			<input type="text" name="username" value="" class="form-control" placeholder="Masukkan Username Petugas" required>
			<br>	
            &emsp;Password 
            <input type="text" name="password" value="" class="form-control" placeholder="Masukkan Password Petugas" required>
			<br>
            &emsp;Level 
            <input type="text" name="level" value="" class="form-control" placeholder="Masukkan Level Petugas" required>
			<br>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<input type="submit" name="simpan" value="Tambah petugas" class="btn btn-outline-primary">
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>