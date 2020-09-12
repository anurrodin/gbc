<?php
$a = array(1,2,3);
$jumlah=array_sum($a);
echo $jumlah;
?>

<?php
	include"koneksi.php";
	$sql=mysqli_query($conn, "select * From laporan_penjulan");
	while ($r=mysqli_fetch_array($sql)){
		$total_2020[] = $r['total2020'];
		$totalpertahun[] = $r['totalpertahun'];
	}
		$total = array_sum($tota);
		$totalpertahun = array_sum($totalpertahun);

		echo "$total";
		echo "$totalpertahun";
?>