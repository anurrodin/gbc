<?php 
session_start();
	if (!isset($_SESSION['nama'])){
		echo "Anda Belum Login";
	}else{

?>
<html>
	<head>
		<title>Halaman Profil</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
			<ul>
				<a href="index.php"><li>Beranda</li></a>
				<class="active" a href="profil.php"><li>Profil</li></a>
				<a href="input.php"><li>Input</li></a>
				<a href="laporan.php"><li>Laporan</li></a>
				<a href="logout.php"><li>Logout</li></a>
			</ul>
		</header>
		<section>
			<center><font style="font-size:40px;margin: 30px;">Profil Perusahaan</font></center>
			<center>
				<link rel="stylesheet" type="text/css" href="text/css" href="style1.css">
					
					<a href="profil.html" class="tombol-aktif animasi biru">Profil Perusahaan</a>
					<a href="Sejarah.html" class="tombol-aktif animasi biru">Sejarah</a>
					<a href="Visi&Misi.html" class="tombol-aktif animasi biru">Visi & Misi</a>
					<a href="Harapan.html" class="tombol-aktif animasi biru">Harapan</a>
			</center>				
		</section>
		<footer>
			<center><font style="font-size:16px;">CopyRight &copy; 2020 <?php echo $_SESSION['nama'] ?>. All Rights Reserved.</font></center>

			<p>By ;</p>
				<img src="banner.jpg" height="100">
				<button type="button" class="tombol-aktif animasi biru"><a href="https://id.foursquare.com/v/griya-alamaya-banjaran/5ca3212e67a9fe002c78c3dd" style="font-size: 14;">Adrees</button>
				<button type="button" class="tombol-aktif animasi biru"><a href="Instagram.html" style="font-size: 14;">Instagram</button>
</body>
</html>
<?php } ?>