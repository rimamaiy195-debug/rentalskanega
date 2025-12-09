<?php

include '../koneksi.php';

$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$harga_perhari = $_POST['harga_perhari'];

mysqli_query($koneksi, "insert into kendaraan values ('', '$nama', '$tipe', '$harga_perhari')");

echo "<script>alert('Kendaraan berhasil ditambahkan'); window.location.href='kendaraan.php'</script>";
?>