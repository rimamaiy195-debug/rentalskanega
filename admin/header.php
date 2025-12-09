<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Rental Kendaraan Skanega</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0;">
	<?php
		session_start();

		if($_SESSION['user_status'] != "1"){
 		   header("location:../login.php");
 		   exit();
		}

	?>


	<nav class="navbar navbar-inverse" style="border-radius: 0px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">RENTAL KENDARAAN</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php"><i class="glyphicon glyphicon-home">Home</i></a></li>
					<li><a href="user.php"><i class="glyphicon glyphicon-user">User</i></a></li>
					<li><a href="kendaraan.php"><i class="glyphicon glyphicon-random">Kendaraan</i></a></li>
					<li><a href="pinjam.php"><i class="glyphicon glyphicon-usd">Pinjam</i></a></li>
					<li><a href="logout.php"><i class="glyphicon glyphicon-log-out">Log Out</i></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right"><li><p class="navbar-text">Halo, <b><?php echo $_SESSION['username'];?></b>!</p></li>
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>