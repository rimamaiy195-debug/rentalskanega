<?php
	include '../koneksi.php';
	$id =$_POST['user_id'];
	$email 	=$_POST['username'];
	$nama	=$_POST['user_nama'];
	$alamat =$_POST['user_alamat'];
	$status = $_POST['user_status'];

	mysqli_query($koneksi, "update user set username='$email', user_nama='$nama', user_alamat='$alamat', user_status='$status' where user_id='$id'");

	echo "<script>alert('User Sudah Diubah'); window.location.href='user.php'</script>";

?>