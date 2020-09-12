<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

		<center><h1>Data Proses Marketing</h1></center>
		<center><p>Pertahun 2019 / 2020</style></p></center>

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
				<th>Marketing</th>
				<th>Nama Konsumen</th>
				<th>Bank</th>
				<th>Hasil Bi Checking</th>
				<th>Hasil Wawancara</th>
				<th>Keterangan</th>
			</tr>	
	<?Php	
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($conn, "select * from data_proses where nama_konsumen like '%".$cari."%'");
	}
	else {
		$data = mysqli_query($conn, "select * from data_proses");
	}


	$no=1;
	while($d=mysqli_fetch_array($data)){
	?>

	<tr center>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nup']; ?></td>
		<td><?php echo $d['marketing']; ?></td>
		<td><?php echo $d['nama_konsumen']; ?></td>
		<td><?php echo $d['bank']; ?></td>
		<td><?php echo $d['hasil_bi_checking']; ?></td>
		<td><?php echo $d['hasil_wawancara']; ?></td>
		<td><?php echo $d['keterangan']; ?></td>
	</tr>
	
	<?php 
	}

	?>

</table>

	<center><p>------------------------------</p></center>
		<center><p> Pilihan Menu</p></center>
		<center><a href="data_proses.php">Back</a></center>
	<center><p>------------------------------</p></center>
</body>
</html>