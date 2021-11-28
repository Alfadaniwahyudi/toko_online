<?php
if($_POST){
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $telp=$_POST['telp'];
 $username=$_POST['username'];
 $password= $_POST['password'];
 if(empty($nama)){
 echo "<script>alert('Nama lengkap tidak boleh kosong');location.href='transaksi.php';</script>";
 } elseif(empty($username)){
 echo "<script>alert('username tidak boleh kosong');location.href='transaksi.php';</script>";
 } elseif(empty($password)){
 echo "<script>alert('password tidak boleh kosong');location.href='transaksi.php';</script>";
 } else {
 include "k0neks1.php";
 $insert=mysqli_query($conn,"insert into pelanggan (nama, alamat, telp, username, password)value ('".$nama."','".$alamat."','".$telp."','".$username."','".$password."')") or die(mysqli_error($conn));
 if($insert){
 echo "<script>alert('Proses transaksi sukses!');location.href='transaksi.php';</script>";
} else {
    echo "<script>alert('Proses transaksi gagal!');location.href='transaksi.php';</script>";
    }
    }
   }
   ?>