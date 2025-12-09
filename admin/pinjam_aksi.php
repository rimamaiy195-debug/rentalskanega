<?php
	include '../koneksi.php';

	$id              = $_POST['id'];
	$kendaraan_nomor = $_POST['kendaraan_nomor'];
	$user_id         = $_POST['user_id'];
	$tgl_pinjam      = $_POST['tgl_pinjam'];
	$tgl_kembali     = $_POST['tgl_kembali'];
	$pinjam_status   = 1;

	mysqli_query($koneksi, "INSERT INTO pinjam (pinjam_id, kendaraan_nomor, user_id, tgl_pinjam, tgl_kembali, pinjam_status) VALUES ('$id', '$kendaraan_nomor', '$user_id', '$tgl_pinjam', '$tgl_kembali', '$pinjam_status')");

	echo "<script>alert('Pinjaman berhasil ditambahkan'); window.location.href='pinjam.php';</script>";
?>
