<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($conn,"SELECT * FROM laporan_penjualan_2019 WHERE kode='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update2019.php" method="post">		
		<table>
			<tr>
				<td>Nama Marketing</td>
				<td>
					<input type="text" name="id" value="<?php echo $data['kode'] ?>">
					<input type="text" name="nama_marketing" value="<?php echo $data['nama_marketing'] ?>">
				</td>					
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