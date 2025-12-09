<?php
	include'../koneksi.php';
	$no = $_GET['no'];
	mysqli_query($koneksi, "delete from kendaraan where kendaraan_nomor='$no'");
	echo "<script>alert('Kendaraan Akan Dihapus?'); window.location.href='kendaraan.php'</script>";
?>