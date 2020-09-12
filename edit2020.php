<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($conn,"SELECT * FROM laporan_penjualan_2020 WHERE kode='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update2020.php" method="post">		
		<table>
			<tr>
				<td>Nama Marketing</td>
				<td>
					<input type="text" name="id" value="<?php echo $data['kode'] ?>">
					<input type="text" name="nama_marketing" value="<?php echo $data['nama_marketing'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Januari</td>
				<td><input type="text" name="januari" value="<?php echo $data['januari'] ?>"></td>
			</tr>	
			<tr>
				<td>Febuari</td>
				<td><input type="text" name="febuari" value="<?php echo $data['febuari'] ?>"></td>
			</tr>	
			<tr>
				<td>Maret</td>
				<td><input type="text" name="maret" value="<?php echo $data['maret'] ?>"></td>
				</tr>	
			<tr>
				<td>April</td>
				<td><input type="text" name="april" value="<?php echo $data['april'] ?>"></td>
				</tr>	
			<tr>
				<td>Mei</td>
				<td><input type="text" name="mei" value="<?php echo $data['mei'] ?>"></td>
				</tr>	
			<tr>
				<td>Juni</td>
				<td><input type="text" name="juni" value="<?php echo $data['juni'] ?>"></td>
				</tr>	
			<tr>
				<td>Juli</td>
				<td><input type="text" name="juli" value="<?php echo $data['juli'] ?>"></td>
				</tr>	
			<tr>
				<td>Agustus</td>
				<td><input type="text" name="agustus" value="<?php echo $data['agustus'] ?>"></td>
			</tr>	
			<tr>
				<td>Agustus</td>
				<td><input type="text" name="agustus" value="<?php echo $data['agustus'] ?>"></td>					
			</tr>	
			<tr>
				<td>September</td>
				<td><input type="text" name="september" value="<?php echo $data['september'] ?>"></td>					
			</tr>
			<tr>
				<td>Oktober</td>
				<td><input type="text" name="oktober" value="<?php echo $data['oktober'] ?>"></td>					
			</tr>
			<tr>
				<td>November</td>
				<td><input type="text" name="november" value="<?php echo $data['november'] ?>"></td>					
			</tr>
			<tr>
				<td>Desember</td>
				<td><input type="text" name="desember" value="<?php echo $data['desember'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>				
		</table>

			<center><p>------------------------------</p></center>
			<center><p> Pilihan Menu</p></center>
			<center><a href="laporan_penjualan.php">Back</a></center>
			<center><p>------------------------------</p></center>

	</form>
	<?php } ?>
</body>
</html>