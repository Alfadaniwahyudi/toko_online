<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title>
</title>
</head>

<body id="bg-login">
    <br>


    <br>
    <center>
    <div class="card" style="width: 18rem;">
        <div class="card-header"><b><h2>LOGIN</h2></b></div>
        <div class="card-body">
        <div class="box-login">
            
            <form action="proses_login.php" method="POST">
                <input type="text" name="username" placeholder="Username" class="form-control" required>
                <br>
                <input type="password" name="password" placeholder="Password" class="form-control" required>
                <br>
                <input type="submit" name="login" placeholder="Login" class="btn btn-outline-success" value="Login"> &emsp; <a href="tambah_petugas.php" class="btn btn-outline-primary" >Tambah Petugas</a>
                <br>
            </form>
        </div>
        </div>
    </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous">
		</script>
</body>
</html>