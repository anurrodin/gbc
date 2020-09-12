<?php 
session_start();
	if (isset($_SESSION['nama'])){
		echo "......Anda Belum Logout! Mohon Maaf ----> <a href='index.php'>logout</a> <------- Terlebih Dahulu......";
	}else{

?>

<html>
	<head>
		<title>Halaman Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="box-login">
		<form action="" method="post"> 
			<font style="font-size: 26px;color: #fff;">Login</font>
			<input type="text" name="email" placeholder="Masukan Email" /></br>				
			<input type="password" name="pass" placeholder="Masukan Password" /></br>
			<input type="submit" name="login" value="Sigin" /></br>
		</form>

		<?php
			include "koneksi.php";
			if(isset($_POST['login'])){
				$cek = mysqli_query($conn, "SELECT * FROM user WHERE
				email = '".$_POST['email']."' AND password = '".$_POST['pass']."'");
				$hasil = mysqli_fetch_array($cek);
				$count = mysqli_num_rows($cek);
				$nama_user = $hasil['nama'];
				if ($count> 0) {
					session_start();
					$_SESSION['nama'] = $nama_user;
					header("location:index.php");
				}else{
					echo "Gagal Login";
				}
			}
		?>
	</div>
</body>
</html>
<?php  }  ?>