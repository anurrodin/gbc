<?php 
 
include 'koneksi.php';
$no = $_POST['no'];
$nup = $_POST['nup'];
$mkt = $_POST['marketing'];
$nama = $_POST['nama_konsumen'];
$bank = $_POST['bank'];
$bi_checking = $_POST['Hasil_bi_checking'];
$wwc = $_POST['hasil_wawancara'];
$ktr  = $_POST['keterangan'];

mysqli_query($conn,"UPDATE data_proses SET no='$no', nup='$nup', mkt='$marketing', nama='$nama_konsumen', bank='$bank', bi_checking='Hasil_bi_checking', wwc='hasil_wawancara', ktr='keterangan');
 
header("location:data_proses.php?pesan=update");
 ?>