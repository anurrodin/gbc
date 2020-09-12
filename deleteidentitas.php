<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from identitas_konsumen where nup='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:identitas_konsumen.php");
 
?>