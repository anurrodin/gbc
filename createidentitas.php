<?php
	include "koneksi.php";

	$no = $_POST['no'];
	$NUP = $_POST['nup'];
	$tanggal = $_POST['tgl'];
	$marketing = $_POST['Marketing'];
	$nama_konsumen = $_POST['Nama_Konsumen'];
	$alamat = $_POST['Alamat'];
	$no_handphone = $_POST['no_handphone'];
	
	$sql = "INSERT INTO `identitas_konsumen` (`no`, `NUP`, `tanggal`, `marketing`, `nama_konsumen`, `alamat`, `no_handphone`) VALUES ({$no},'{$NUP}','{$tanggal}','{$marketing}','{$nama_konsumen}','{$alamat}','{$no_handphone}')";

	if(isset($_REQUEST['mode']) && $_REQUEST['mode'] == 'edit') {
		$sql = "UPDATE `identitas_konsumen` 
				SET 
					nama_konsumen = '{$nama_konsumen}', 
					alamat = '{$alamat}', 
					no_handphone = '{$no_handphone}'
				WHERE nup = '{$NUP}'";		
	}
	
	// echo $sql;exit();
	$query_mysql = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	header("location:identitas_konsumen.php?pesan=create");
	?>
