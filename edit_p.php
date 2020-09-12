<?php 
	include "koneksi.php";
	$No = $_GET['no'];
	$data_proses = mysqli_query($conn,"SELECT * FROM data_proses WHERE No='$No'");
	$nomor = 1;
	$bank = array('BJB SYARIAH','BJB Sumber Sari','BTN Cimahi');
	$hasil_bi_checking = array('Ok','tidak');
	$hasil_wawancara = array('ok','tidak');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="updateproses.php" method="post">		
		<table>
			<tr>
				<td>Nomor</td>
				<td>
					<input type="text" name="no" value="<?php echo $data['no'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Nomor Urut Pemesanan</td>
				<td><input type="text" name="nup" value="<?php echo $data['nup'] ?>"></td>					
			</tr>	
			<tr>
				<td>Marketing</td>
				<td><input type="text" name="marketing" value="<?php echo $data['marketing'] ?>"></td>					
			</tr>
			<tr>
				<td>Nama Konsumen</td>
				<td><input type="text" name="nama_konsumen" value="<?php echo $data['nama_konsumen'] ?>"></td>					
			</tr>
			<tr>
				<td>Bank</td>
				<td><input type="text" name="bank" value="<?php echo $data['bank'] ?>"></td>					
			</tr>
			<tr>
				<td>Hasil Bi Checking</td>
				<td><input type="text" name="hasil_bi_checking" value="<?php echo $data['hasil_bi_checking'] ?>"></td>					
			</tr>
			<tr>
				<td>Hasil Wawancara</td>
				<td><input type="text" name="hasil_wawancara" value="<?php echo $data['hasil_wawancara'] ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"></td>
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>