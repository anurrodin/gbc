<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama_marketing'];
$agustus = $_POST['agustus'];
$september = $_POST['september'];
$oktober = $_POST['oktober'];
$november = $_POST['november'];
$desember  = $_POST['desember'];
mysqli_query($conn,"UPDATE laporan_penjualan_2019 SET nama_marketing='$nama', agustus='$agustus', september='$september', oktober='$oktober', november='$november', desember='$desember' WHERE kode='$id'");
 
header("location:laporan_penjualan.php?pesan=update");
?>