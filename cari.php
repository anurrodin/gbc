<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
		<body>		
			<center><h1>Data Konsumen Lolos</h1></center>
			<center><p>Laporan Konsumen Yang Menghuni Di Griya Alamaya Banjaran Rumah Subsidi</style></p></center>

<?php
	include'koneksi.php';
?>

<?php
	if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian :".$cari."</b>";
}
?>
	<table class="table" border="1" center>
		<tr>
			<th>No</th>
			<th>NUP</th>
			<th>Nama_Konsumen</th>
			<th>Blok</th>
			<th>Kavling</th>
			<th>Akad_kredit</th>
		</tr>	
	<?Php	
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($conn, "select * from data_hasil where nama_konsumen like '%".$cari."%'");
	}
	else {
		$data = mysqli_query($conn, "select * from data_hasil");
	}


	$no=1;
	while($d=mysqli_fetch_array($data)){
	?>

	<tr center>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nup']; ?></td>
		<td><?php echo $d['nama_konsumen']; ?></td>
		<td><?php echo $d['blok']; ?></td>
		<td><?php echo $d['kavling']; ?></td>
		<td><?php echo $d['akad_kredit']; ?></td>
	</tr>
	<?php 
} 
	?>

</table>

	<p>Syarat data yang masuk:</style></p>
	<p>1. Data diambil dari konsumen yang lolos dari proses,</style></p>
	<p>2. Data Berkas,</style></p>
	<p>3. Data Lunas Bayar Dp (Down Paytmen) dll,</style></p>

	<center><p>------------------------------</p></center>
		<center><p> Pilihan Menu</p></center>
		<center><a href="data_hasil.php">Back</a></center>
	<center><p>------------------------------</p></center>
</body>
</html>	