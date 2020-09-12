<!DOCTYPE html>
<html>
	<head>
		<title>Data Konsumen Baru</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
	</head>
	<body label style="font-size: 20px; margin: 40px 30px; background: #fff;">
		<?php
			include "koneksi.php";
			$sql = "SELECT COUNT(*) as jumlah_data FROM identitas_konsumen";
			$query = mysqli_query($conn, $sql);
			$result = mysqli_fetch_assoc($query);
			$nomorBerikutnya = $result['jumlah_data'] + 1;
			$tanggalHariIni = date('Y-m-d');

			$identitas = array();

			if (isset($_GET['nup'])) {
				$sql = "SELECT * FROM identitas_konsumen WHERE nup = '" . $_GET['nup'] . "'";
				$query = mysqli_query($conn, $sql);
				$identitas = mysqli_fetch_assoc($query);
			}
		?>
		<table class="table" align="center" width="1000px" cellspacing="0">
			<tr align="100px";>
				<td align="center"><h1>Input Data Konsumen</h3></td>
			</tr>
			<td height="500px" valign="Top">
				<b><label>Data Konsumen Baru</label></b>
				<form action="createidentitas.php" method="post">

					<input type="hidden" name="mode" value="<?php echo (isset($identitas['nup']) ? 'edit' : '') ?>">
					
					<label for="no">Nomor:</label>
					<input type="text" name="no" id="No" value="<?php echo $nomorBerikutnya; ?>" placeholder="Nomor..." <?php echo (isset($identitas['nup']) ? 'readonly' : '') ?> required>
					<label for="nup">NUP:</label>
					<input type="text" id="nup" name="nup" value="<?php echo (isset($identitas['nup']) ? $identitas['nup'] : '') ?>" placeholder="Nomor Urut Pemesanan..." <?php echo (isset($identitas['nup']) ? 'readonly' : '') ?> required></br>
					<label for="tanggal">Tanggal:</label>
					<input type="date" name="tgl" id="tanggal"  value="<?php echo (isset($identitas['tanggal']) ? $identitas['tanggal'] : $tanggalHariIni) ?>" placeholder="Tanggal Sekarang..." <?php echo (isset($identitas['nup']) ? 'readonly' : '') ?> required></br>
					<label>Nama_Marketing:</label></br>

					<select name="Marketing">
						<option value="" selected disabled>-- PILIH MARKETING --</option>
						<option value="INHOUSE" <?php echo (isset($identitas['marketing']) && $identitas['marketing'] == 'INHOUSE' ? 'selected' : '') ?> >InHouse / Nurdin</option>
						<option value="INHOUSE" <?php echo (isset($identitas['marketing']) && $identitas['marketing'] == 'INHOUSE' ? 'selected' : '') ?> >INHOUSE / Rahman</option>
						<option value="YUSUF" <?php echo (isset($identitas['marketing']) && $identitas['marketing'] == 'YUSUF' ? 'selected' : '') ?> >Yusuf</option>
						<option value="ITA" <?php echo (isset($identitas['marketing']) && $identitas['marketing'] == 'ITA' ? 'selected' : '') ?> >ITA</option>
						<option value="RACHMAT" <?php echo (isset($identitas['marketing']) && $identitas['marketing'] == 'RACHMAT' ? 'selected' : '') ?> >Rachmat</option>
						<option value="HERY" <?php echo (isset($identitas['marketing']) && $identitas['marketing'] == 'HERY' ? 'selected' : '') ?> >Hery</option>
						<option value="INTERJAVA" <?php echo (isset($identitas['marketing']) && $identitas['marketing'] == 'INTERJAVA' ? 'selected' : '') ?> >InterJava</option>
						<option value="TOMMY" <?php echo (isset($identitas['marketing']) && $identitas['marketing'] == 'TOMMY' ? 'selected' : '') ?> >Tommy</option>
						<option value="SONA" <?php echo (isset($identitas['marketing']) && $identitas['marketing'] == 'SONA' ? 'selected' : '') ?> >Sona</option>
						<option value="BK Property" <?php echo (isset($identitas['marketing']) && $identitas['marketing'] == 'BK Property' ? 'selected' : '') ?>>BK Property</option>
					</select>

					<!-- <input type="radio" name="Marketing" id="N1" value="InHouse" checked>
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
					<label for="Nama_Marketing">BK Property</label> </br> -->
					
					<p>---------------------------------------------------------------------------------------------------------------------------------</p>
					<label for="Nama_Konsumen">Nama_Konsumen:</label>
					<input type="text" name="Nama_Konsumen" value="<?php echo (isset($identitas['nama_konsumen']) ? $identitas['nama_konsumen'] : '') ?>" id="Nama_Konsumen" placeholder="Nama Konsumen..." required></br>
					<label for="Alamat">Alamat:</label>
					<input type="text" name="Alamat" value="<?php echo (isset($identitas['alamat']) ? $identitas['alamat'] : '') ?>" id="Alamat" placeholder="Alamat Lengkap..." required></br>
					<label for="Nomor_Hanpone">Nomor_Hanpone:</label>
					<input type="text" name="no_handphone" value="<?php echo (isset($identitas['no_handphone']) ? $identitas['no_handphone'] : '') ?>" id="Nomor_Hanpone" placeholder="Yang Bisa Di Hubungi..." required></br>
					<p>------------------------------</p>
					<button type="Save" value="Save">Save</button>
					<button type="Delet" value="Delete">Delete</button>
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
					<a href="identitas_konsumen.php?nup=<?php echo $hasil['nup']; ?>">Edit</a>
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