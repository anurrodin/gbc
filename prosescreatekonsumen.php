<?php 
	include "koneksi.php";
    $id = $_POST['id'];
    $nup = $_POST['nup'];
    $nama_konsumen = $_POST['nama_konsumen'];
    $blok = $_POST['blok'];
    $kavling = $_POST['kavling'];
    $akad_kredit = $_POST['akad_kredit'];
	
    $query_mysql = mysqli_query($conn,"INSERT INTO `data_hasil`(`id`, `nup`, `nama_konsumen`, `blok`, `kavling`, `akad_kredit`) VALUES ($id, $nup, '$nama_konsumen', '$blok', '$kavling', '$akad_kredit')");
    header("location:data_hasil.php");
	?>