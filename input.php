<?php 
session_start();
	if (!isset($_SESSION['nama'])){
		echo "Anda Belum Login";
	}else{

?>
<html>
	<head>
		<title>Data Input</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
			<ul>
				<a href="index.php"><li>Beranda</li></a>
				<a href="profil.php"><li>Profil</li></a>
				<class="active" a href="input.php"><li>Input</li></a>
				<a href="laporan.php"><li>Laporan</li></a>
				<a href="logout.php"><li>Logout</li></a>
			</ul>
		</header>
		<section>
			<center><font style="font-size:40px;">Data PT Griya Bangun Cipta</font></center>
			<center>	
				<link rel="stylesheet" type="text/css" href="text/css" href="style1.css">
					<a href="identitas_konsumen.php" class="tombol-aktif animasi biru">Input Data Konsumen</a>
					<a href="data_proses.php" class="tombol-aktif animasi biru">Proses Konsumen</a>
					<a href="laporan_penjualan.php" class="tombol-aktif animasi biru">Data Marketing</a>
			</center>
		</section>
		<footer>
			<center><font style="font-size:16px;">CopyRight &copy; 2020 <?php echo $_SESSION['nama'] ?>. All Rights Reserved.</font></center>

			<p>By ;</p>
				<img src="banner.jpg" height="100">
</body>

</html>
<?php } ?>