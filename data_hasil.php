<!DOCTYPE html>
<html>
	<head>
		<title>Halaman data_hasil</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>		
		<center><h1>Data Konsumen Lolos</h1></center>

		<table class="table" bordered="1">
			<tr>
				<th>NO</th>
				<th>NUP</th>
				<th>NAMA_KONSUMEN</th>
				<th>BLOK</th>
				<th>KAVLING</th>
				<th>AKAD_KREDIT</th>
			</tr>

		
			<?php 
					include "koneksi.php";
					$no=1;
					$halaman = 10;
					$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					$result = mysqli_query($conn,"SELECT * FROM data_hasil");
					$total = mysqli_num_rows($result);
					$pages = ceil($total/$halaman);            
					$query = mysqli_query($conn,"select * from data_hasil LIMIT $mulai, $halaman")or die(mysql_error);
					$no =$mulai+1;
					
					while ($hasil = mysqli_fetch_assoc($query)) {
						?>			
					<tr>
					<td><?=$no++?></td>
					<td><?php echo $hasil['nup'];?></td>
					<td><?php echo $hasil['nama_konsumen']; ?></td>
					<td><?php echo $hasil['blok'];?></td>
					<td><?php echo $hasil['kavling']; ?></td>
					<td><?php echo $hasil['akad_kredit']; ?></td>
				</tr>
<?php }?>
	<center><p>Laporan Konsumen Yang Menghuni Di Griya Alamaya Banjaran Rumah Subsidi</style></p></center>
		<form action="cari.php" method="Get">
			<label>Cari:</label>
			<input type="text" name="cari">
			<input type="submit" value="Cari">
	</form>
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


	<?php } ?>

		</table>
		<div>
				<?php for ($i=1; $i<=$pages ; $i++){ ?>
				<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

				<?php } ?>

			</div>
	</body>

			<center><a href="createkonsumen.php"><button>Tambah</button></a></center>


	<p>Syarat data yang masuk:</style></p>
	<p>1. Data diambil dari konsumen yang lolos dari proses,</style></p>
	<p>2. Data Berkas,</style></p>
	<p>3. Data Lunas Bayar Dp (Down Paytmen) dll,</style></p>

	<center><p>------------------------------</p></center>
		<center><p> Pilihan Menu</p></center>
		<center><a href="Laporan.php">Exit</a></center>
	<center><p>------------------------------</p></center>


</html>