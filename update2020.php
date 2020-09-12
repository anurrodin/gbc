<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama_marketing'];
$januari = $_POST['januari'];
$febuari = $_POST['febuari'];
$maret = $_POST['maret'];
$april = $_POST['april'];
$mei = $_POST['mei'];
$juni = $_POST['juni'];
$juli = $_POST['juli'];
$agustus = $_POST['agustus'];
$september = $_POST['september'];
$oktober = $_POST['oktober'];
$november = $_POST['november'];
$desember  = $_POST['desember'];
mysqli_query($conn,"UPDATE laporan_penjualan_2020 SET nama_marketing='$nama', januari='$januari', febuari='$febuari', maret='$maret', april='$april', mei='$mei', juni='$juni', juli='$juli', agustus='$agustus', september='$september', oktober='$oktober', november='$november', desember='$desember' WHERE kode='$id'");
 
header("location:laporan_penjualan.php?pesan=update");
?>