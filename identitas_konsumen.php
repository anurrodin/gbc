<!DOCTYPE html>
<html>
	<head>
		<title>Data Konsumen Baru</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
	</head>
	<body label style="font-size: 20px; margin: 40px 30px; background: #fff;">
		<table class="table" align="center" width="1000px" cellspacing="0">
			<tr align="100px";>
				<td align="center"><h1>Input Data Konsumen</h3></td>
			</tr>
			<td height="500px" valign="Top">
				<b><label>Data Konsumen Baru</label></b>
				<form action="createidentitas.php" method="post">
					
					<label for="no">Nomor:</label>
					<input type="text" name="no" id="No" placeholder="Nomor..." required>
					<label for="nup">NUP:</label>
					<input type="text" name="" id="nup" placeholder="Nomor Urut Pemesanan..." required></br>
					<label for="tanggal">Tanggal:</label>
					<input type="date" name="tgl" id="tanggal" placeholder="Tanggal Sekarang..." required></br>
					<label>Nama_Marketing:</label></br>
					<input type="radio" name="Marketing" id="N1" value="InHouse" checked>
					<label for="Nama_Marketing">InHouse / Nurdin</label></br>
					
					<input type="radio" name="Marketing" id="R1" value="INHOUSE" checked>
					<label for="Nama_Marketing">INHOUSE / Rahman</label></br>
					<input type="radio" name="Marketing" id="Y1" value="Yusuf" checked>
					<label for="Nama_Marketing">Yusuf</label></br>
					<input type="radio" name="Marketing" id="I1" value="ITA" checked>
					<label for="Nama_Marketing">ITA</label></br>
					<input type="radio" name="Marketing" id="R2" value="Rachmat" checked>
					<label for="Nama_Marketing">Rachmat</label></br>
					<input type="radio" name="Marketing" id="H1" value="Hery" checked>
					<label for="Nama_Marketing">Hery</label></br>
					<input type="radio" name="Marketing" id="I1" value="InterJava" checked>
					<label for="Nama_Marketing">InterJava</label></br>
					<input type="radio" name="Marketing" id="T1" value="Tommy" checked>
					<label for="Nama_Marketing">Tommy</label></br>
					<input type="radio" name="Marketing" id="S1" value="Sona" checked>
					<label for="Nama_Marketing">Sona</label></br>
					<input type="radio" name="Marketing" id="BP1" value="BK Property" checked>
					<label for="Nama_Marketing">BK Property</label> </br>
					<p>---------------------------------------------------------------------------------------------------------------------------------</p>
					<label for="Nama_Konsumen">Nama_Konsumen:</label>
					<input type="text" name="Nama_Konsumen" id="Nama_Konsumen" placeholder="Nama Konsumen..." required></br>
					<label for="Alamat">Alamat:</label>
					<input type="text" name="Alamat" id="Alamat" placeholder="Alamat Lengkap..." required></br>
					<label for="Nomor_Hanpone">Nomor_Hanpone:</label>
					<input type="number" name="Nomor_Hanpone" id="Nomor_Hanpone" placeholder="Yang Bisa Di Hubungi..." required></br>
					<p>------------------------------</p>
					<button type="Save" value="Save">Save</button>
					<button type="Delet" value="Delete">Delet</button>
					<p>------------------------------</p>
				</form>
			</td>
		</tr>
	</table>
	<footer>
		<center><h1>Data Konsumen</h1></center>
		<center><p> Rumah Subsidi</p></center>
		<table class="table" id="tabel_konsumen">
			<thead>
				<tr>
					<th>No</th>
					<th>Nup</th>
					<th>Tanggal</th>
					<th>Marketing</th>
					<th>Nama konsumen</th>
					<th>Alamat</th>
					<th>No hp</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include "koneksi.php";
				$no = 1;
				$halaman = 10;
				$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$result = mysqli_query($conn, "SELECT * FROM identitas_konsumen");
				$total = mysqli_num_rows($result);
				$pages = ceil($total/$halaman);
				$query = mysqli_query($conn,"select * from identitas_konsumen LIMIT $mulai, $halaman")or die(mysql_error);
				$no = $mulai + 1;
			
				while ($hasil = mysqli_fetch_assoc($query)) {
			?>
			<?php } ?>
			
			<?php
				include"koneksi.php";
				$no= 1;
				$data = mysqli_query($conn,"SELECT * FROM identitas_konsumen");
				while ($hasil = mysqli_fetch_array($data)){
			?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $hasil['nup']; ?></td>
				<td><?php echo $hasil['tanggal']; ?></td>
				<td><?php echo $hasil['marketing']; ?></td>
				<td><?php echo $hasil['nama_konsumen']; ?></td>
				<td><?= $hasil['alamat'];?></td>
				<td><?= $hasil['no_handphone'];?></td>
				<td>
					<a href="#">Edit</a>
					<a href="deleteidentitas.php?id=<?= $hasil['nup']?>">Hapus</a>
				</td>
			</tr>
			
			<?php } ?>
			</tbody>
		</table>
		
		<center><p>------------------------------</p></center>
		<center><p> Pilihan Menu</p></center>
		<center><a href="input.php">Exit</a></center>
		<center><p>------------------------------</p></center>
	</footer>
	
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready( function () {
		    $('#tabel_konsumen').DataTable();
		});
	</script>
</body>

</html>