<?php 
session_start();
	if (!isset($_SESSION['nama'])){
		echo "Mohon Maaf Anda Belum Login! ";
	}else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Beranda</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Document</title>
</head>
<body>
	<header>
			<ul>
				<class="active" a href="index.php"><li>Beranda</li></a>
				<a href="profil.php"><li>Profil</li></a>
				<a href="input.php"><li>Input</li></a>
				<a href="laporan.php"><li>Laporan</li></a>
				<a href="logout.php"><li>Logout</li></a>
			</ul>
	</header>
	<section>
			<center><font style="font-size:40px;">Selamat Datang di Halaman Beranda</font></center>
			<marquee behavior="alternate"><font style="font-size:24px;line-height: 90px;background-color: #fff;">Perumahan Griya Alamaya Banjaran</font></marquee>
			<center><font style="font-size:20px;line-height: 20px;background-color: #fff">“Pembangunan dan Pelayanan Perumahan terbaik hanya dapat dicapai dilalui Komitmen PT Griya Bangun Cipta, serta dengan dukungan seluruh Mitra Perusahaan”</center></font>
		</section>
			
		<footer>
			<center><font style="font-size:16px;">CopyRight &copy; 2020 <?php echo $_SESSION['nama'] ?>. All Rights Reserved.</font></center>		
	
	<p>By ;</p>
			<img src="banner.jpg" height="100">
			<button type="button" class="tombol-aktif animasi biru"><a href="https://api.whatsapp.com/send?phone=6285731964667&text=Pembuat Script WEB Bisa Menghubungi Nomor Di Atas" style="font-size: 14;">Contak Person</button>
		</footer>
</body>
</html>
<?php } ?>