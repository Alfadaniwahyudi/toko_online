<?php 
include 'k0neks1.php';
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg', 'gif');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext1 = pathinfo($filename);
$ext = $ext1['extension'];
 
if(empty($nama_produk)){
    echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
} else{
    if(!in_array($ext,$ekstensi) ) {
        header("location:tambah_produk.php?alert=gagal_ekstensi".$filename);
    }else{
        if($ukuran < 1044070){      
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'],'file/'.$rand.'_'.$filename);
            mysqli_query($conn, "INSERT INTO produk VALUES(NULL,'$nama_produk','$deskripsi','$harga','$xx')");
            echo "<script>alert('Sukses menambahkan produk');location.href='tampil_produk.php';</script>";
        }else{
            echo "<script>alert('Ukuran file terlalu besar');location.href='tampil_produk.php';</script>";
        }
    }
}
?>