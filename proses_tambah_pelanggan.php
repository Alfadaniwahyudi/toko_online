<?php
if ($_POST) {
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');
        location.href='tambah_pelanggan.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');
        location.href='tambah_pelanggan.php';</script>";
    } else {
        include "k0neks1.php";

        $insert=mysqli_query($conn, "insert into petugas (nama_petugas,username,password,level) value ('".$nama."','".$username."','".$password."')");

        if ($insert) {
            echo "<script>alert('Sukses menambahkan petugas');
            location.href='tambah_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');
            location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>