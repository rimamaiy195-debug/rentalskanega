<?php
	include 'header_user.php';
	include '../koneksi.php';

?>

<div class="container">
	<center>
		<h3 style="margin-bottom: 0px;"><b>Selamat Datang!</b>di Sistem Informasi Rental Kendaraan RPL Skanega</h3>
	</center>
	<br><br>

	<div class="panel">
		<div class="panel-heading">
			<h4>Riwayat Pinjam Terakhir</h4>
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Nama User</th>
					<th>Alamat</th>
					<th>Nama Kendaraan</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
					<th>Status Pinjam</th>
				</tr>
					<?php
          				$data = mysqli_query($koneksi,"SELECT * FROM pinjam JOIN user ON pinjam.user_id = user.user_id JOIN kendaraan ON pinjam.kendaraan_nomor = kendaraan.kendaraan_nomor");
          				$no = 1;
         		 		while ($d=mysqli_fetch_array($data)) {
           			?>
      					<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['user_nama']; ?></td>
							<td><?php echo $d['user_alamat']; ?></td>
							<td><?php echo $d['kendaraan_nama']; ?></td>
							<td><?php echo $d['tgl_pinjam']; ?></td>
							<td><?php echo $d['tgl_kembali']; ?></td>
							<td>
								<?php
								if ($d['pinjam_status']==1) {
									echo "<div class='label label-success'>READY</div>";
								}elseif ($d['pinjam_status']==2) {
									echo "<div class='label label-warning'>DIPINJAM</div>";
									}
									?>
							</td>
						</tr>
					<?php
						}
					?>
			</table>
		</div>
	</div>
</div>