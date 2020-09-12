<!DOCTYPE html>
<html>
	<head>
		<title>Halaman laporan Penjualan</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>

	<body>
		<center><h2>Data Laporan Marketing</h2></center>
		<center><p>Pertahun 2019 / 2020</p></center>
		<p>Laporan penjualan rumah 2019 oleh marketing & mitra/agent di griya alamaya banjaran pertiap bulan:</style></p>
		<table class="table" bordered="1">
			<tr>
				<th>Kode</th>
				<th>Nama_Marketing</th>
				<th>Agustus</th>
				<th>September</th>
				<th>Oktober</th>
				<th>November</th>
				<th>Desember</th>
				<th>Total 2019</th>
				<th>AKSI</th>
			</tr>

			<?php

				include"koneksi.php";
				$data = mysqli_query($conn,"SELECT * FROM laporan_penjualan_2019");
				while ($hasil = mysqli_fetch_array($data)){
					?>
				<tr>
					<td><?php echo $hasil['kode']; ?></td>
					<td><?php echo $hasil['nama_marketing']; ?></td>
					<td><?php echo $hasil['agustus']; ?></td>
					<td><?php echo $hasil['september']; ?></td>
					<td><?php echo $hasil['oktober']; ?></td>
					<td><?php echo $hasil['november']; ?></td>
					<td><?php echo $hasil['desember']; ?></td>
					<?php $total=$hasil['agustus']+$hasil['september']+$hasil['oktober']+$hasil['november']+$hasil['desember'];?>
					<td><?= $total?></td>
					
					<td>
						<a href='edit2019.php?id=<?php echo $hasil['kode'];?>'>Edit</a>
						<a href="">Tambah</a>
					</td>
				<?php } ?>
				</tr>
			</table>

		<table class="table" border="" align="down">
			<tr>
				<th>Kod</th>
				<th>Nama_Marketing</th>
				<th>Januari</th>
				<th>Febuari</th>
				<th>Maret</th>
				<th>April</th>
				<th>Mei</th>
				<th>Juni</th>
				<th>Juli</th>
				<th>Agustus</th>
				<th>September</th>
				<th>Oktober</th>
				<th>November</th>
				<th>Desember</th>
				<th>Total 2020</th>
				<th>Total Pertahun</th>
				<th>AKSI</th>
			</tr>
			<?php
				include"koneksi.php";

				$data = mysqli_query($conn,"SELECT * FROM laporan_penjualan_2020");
				while ($hasil = mysqli_fetch_array($data)){
					?>
				<tr>
					<td><?php echo $hasil['kode']; ?></td>
					<td><?php echo $hasil['nama_marketing']; ?></td>
					<td><?php echo $hasil['januari']; ?></td>
					<td><?php echo $hasil['febuari']; ?></td>
					<td><?php echo $hasil['maret']; ?></td>
					<td><?php echo $hasil['april']; ?></td>
					<td><?php echo $hasil['mei']; ?></td>
					<td><?php echo $hasil['juni']; ?></td>
					<td><?php echo $hasil['juli']; ?></td>
					<td><?php echo $hasil['agustus']; ?></td>
					<td><?php echo $hasil['september']; ?></td>
					<td><?php echo $hasil['oktober']; ?></td>
					<td><?php echo $hasil['november']; ?></td>
					<td><?php echo $hasil['desember']; ?></td>
					<!-- <td><?php echo $hasil['total_2020']; ?></td> -->
					<?php $total1=$hasil['januari']+$hasil['febuari']+$hasil['maret']+$hasil['april']+$hasil['mei']+$hasil['juni']+$hasil['juli']+$hasil['agustus']+$hasil['september']+$hasil['oktober']+$hasil['november']+$hasil['desember'];?>
					<td><?= $total1?></td>
					<? $i = 0; ?>
					<td><?= $total + $total1?></td>
					<td>
						<a href='edit2020.php?id=<?php echo $hasil['kode'];?>'>Edit</a>
						<a href="#">Tambah</a>
					</td>
				</tr>
					<?php } ?>

				<p>Laporan penjualan rumah 2020 oleh marketing & mitra/agent di griya alamaya banjaran pertiap bulan:</style></p>

		</table>
	</body>

			<center><p>------------------------------</p></center>
			<center><p> Pilihan Menu</p></center>
			<center><a href="input.php">Exit</a></center>
			<center><p>------------------------------</p></center>
	</html>