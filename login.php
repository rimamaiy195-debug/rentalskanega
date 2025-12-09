<?php
session_start();
include 'koneksi.php';

$email = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$email' AND password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
    $d = mysqli_fetch_assoc($data);
    $_SESSION['username'] = $email;
    $_SESSION['status'] = "login";
    $_SESSION['user_id'] = $d['user_id'];
    $_SESSION['user_nama'] = $d['user_nama'];
    $_SESSION['user_status'] = $d['user_status'];

    if($d['user_status'] == "1"){
        header("location:admin/index.php");
        exit();
    } 
    else if($d['user_status'] == "2"){
        header("location:user/index_user.php");
        exit();
    }

}
?>
