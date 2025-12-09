<?php

include '../koneksi.php';

$email = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['user_nama'];
$alamat = $_POST['user_alamat'];
$status = $_POST['user_status'];

mysqli_query($koneksi, "insert into user values ('','$email', '$password', '$nama', '$alamat', '$status')");

echo "<script>alert('User berhasil ditambahkan'); window.location.href='user.php'</script>";
?>