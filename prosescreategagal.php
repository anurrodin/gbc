<?php 
	include "koneksi.php";
    $nomor = $_POST['no'];
    $nup = $_POST['nup'];
    $marketing = $_POST['marketing']
    $nama_konsumen = $_POST['nama_konsumen'];
    $alasan_batal = $_POST['alasan_batal'];
    $deposit = $_POST['deposit'];
    $dp = $_POST['dp'];
    $lain_lain = $_POST['lain_lain'];
    $kode = $_POST['kode'];
    $pengembalian_deposit = $_POST['pengembalian_deposit'];
    $Hasil = $_POST['Hasil'];
    $pengembalian_dll = $_POST['pengembalian_dll']
	
    $query_mysql = mysqli_query($conn,"INSERT INTO `data_hasil`(`no`, `nup`, 'marketing', `nama_konsumen`, `alasan_batal`, `deposit`, `dp`, 'lain_lain', 'kode', 'pengembalian_deposit', 'Hasil', 'pengembalian_dll') VALUES ($nomor, $nup, '$marketing', '$nama_konsumen', '$alasan_batal', '$deposit', '$dp', '$lain_lain', '$kode', '$pengembalian_deposit', '$Hasil', '$pengembalian_dll')");
    header("location:konsumen_gagal.php");
	?>