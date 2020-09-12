<!DOCTYPE html>
<html>
<head>
	<title>Data Konsumen  Gagal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<bodylabel style="font-size: 20px; margin: 40px 30px; background: #fff;" >
	<center><h2>Laporan Konsumen Gagal</h2></center>
		<center><p>Pertahun 2019 / 2020</p></center>	
		<table class="table">
				<tr>
					<th>No</th>
					<th>NUP</th>
					<th>Marketing</th>
					<th>Nama Konsumen</th>
					<th>Alasan Batal</th>
					<th>Deposit</th>
					<th>Dp</th>
					<th>Lain-lain</th>
					<th>Kode</th>
					<th>Pengembalian_Deposit</th>
					<th>Hasil</th>					
					<th>Pengembalian_Dll</th>
				</tr>
			<?php 
					include "koneksi.php";
					$no=1;
					$halaman = 10;
					$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					$result = mysqli_query($conn,"SELECT * FROM konsumen_gagal");
					$total = mysqli_num_rows($result);
					$pages = ceil($total/$halaman);            
					$query = mysqli_query($conn,"select * from konsumen_gagal LIMIT $mulai, $halaman")or die(mysql_error);
					$no =$mulai+1;
					
					while ($hasil = mysqli_fetch_assoc($query)) {
						?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $hasil['nup']; ?></td>
					<td><?php echo $hasil['marketing']; ?></td>
					<td><?php echo $hasil['nama_konsumen']; ?></td>
					<td><?php echo $hasil['alasan_batal']; ?></td>
					<td><?php echo $hasil['deposit']; ?></td>
					<td><?php echo $hasil['dp']; ?></td>
					<td><?php echo $hasil['lain_lain']; ?></td>
					<td><?php echo $hasil['kode']; ?></td>
					<td><?php echo $hasil['pengembalian_deposit']; ?></td>
					<td><?php echo $hasil['Hasil']; ?></td>
					<td><?php echo $hasil['pengembalian_dll']; ?></td>
					
					</td>
				</tr>
			<?php } ?>


					<form action="Carigagal.php" method="Get">
					<label>Cari:</label>
					<input type="text" name="cari">
					<input type="submit" value="Cari">
			</form>
				<?Php	
					if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
						$data = mysqli_query($conn, "select * from konsumen_gagal where nama_konsumen like '%".$cari."%'");
			}
			else {
					$data = mysqli_query($conn, "select * from konsumen_gagal");
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
					<center><a href="creategagal.php"><button>Tambah</button></a></center>
					<center><p>------------------------------</p></center>
					<center><p> Pilihan Menu</p></center>
					<center><a href="laporan.php">Exit</a></center>
					<center><p>------------------------------</p></center>

		</body>

</html>