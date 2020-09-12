<?php
	include "koneksi.php";
	$no = $_POST['no'];
	$NUP = $_POST['nup'];
	$tanggal = $_POST['tgl'];
	$marketing = $_POST['Marketing'];
	$nama_konsumen = $_POST['Nama_Konsumen'];
	$alamat = $_POST['Alamat'];
	$no_handphone = $_POST['no_handphone'];
	
	$query_mysql = mysqli_query($conn,"INSERT INTO `identitas_konsumen`(`no`, `NUP`, `tanggal`, `marketing`, `nama_konsumen`, `alamat`, `no_handphone`) VALUES ({$no},{$NUP},{$tanggal},'{$marketing}','{$nama_konsumen}','{$alamat}','{$no_handphone}')")or die(mysql_error());
	header("location:identitas_konsumen.php?pesan=create");
	?>
