<!DOCTYPE html>
<html>
<head>
	<title>Data Proses Konsumen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body label style="font-size: 20px; margin: 40px 30px; background: #fff;" >
	<center><h2>Data Proses Marketing</h2></center>
		<center><p>Pertahun 2019 / 2020</p></center>	
		<table class="table">
				<tr>
					<th>No</th>
					<th>NUP</th>
					<th>Marketing</th>
					<th>Nama Konsumen</th>
					<th>Bank</th>
					<th>Hasil Bi Checking</th>
					<th>Hasil Wawancara</th>
					<th>Keterangan</th>
					<th>AKSI</th>
				</tr>
				<?php 
					include "koneksi.php";
					$no=1;
					$halaman = 10;
					$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					$result = mysqli_query($conn,"SELECT * FROM data_proses");
					$total = mysqli_num_rows($result);
					$pages = ceil($total/$halaman);            
					$query = mysqli_query($conn,"select * from data_proses LIMIT $mulai, $halaman")or die(mysql_error);
					$no =$mulai+1;
					
					while ($hasil = mysqli_fetch_assoc($query)) {
						?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $hasil['nup']; ?></td>
					<td><?php echo $hasil['marketing']; ?></td>
					<td><?php echo $hasil['nama_konsumen']; ?></td>
					<td><?php echo $hasil['bank']; ?></td>
					<td><?php echo $hasil['hasil_bi_checking']; ?></td>
					<td><?php echo $hasil['hasil_wawancara']; ?></td>
					<td><?php echo $hasil['keterangan']; ?></td>
					<td>
						<a href="">Tambah</a>
						<a href="edit_p.php">Edit</a>
					</td>
				</tr>
			<?php } ?>
				<form action="cariproses.php" method="Get">
					<label>Cari:</label>
					<input type="text" name="cari">
					<input type="submit" value="Cari">
			</form>
				<?Php	
					if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
						$data = mysqli_query($conn, "select * from data_proses where nama_konsumen like '%".$cari."%'");
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


					<center><p>------------------------------</p></center>
					<center><p> Pilihan Menu</p></center>
					<center><a href="input.php">Exit</a></center>
					<center><p>------------------------------</p></center>
</body>
</html>