<?php
include 'header_user.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Pinjam</h4>
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>ID</th>
					<th>Nama User</th>
					<th>Alamat</th>
					<th>Nama Kendaraan</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
					<th>Status Pinjam</th>
				</tr>
					<?php
						include '../koneksi.php';
          				$data = mysqli_query($koneksi,"SELECT * FROM pinjam LEFT JOIN user ON pinjam.user_id = user.user_id LEFT JOIN kendaraan ON pinjam.kendaraan_nomor = kendaraan.kendaraan_nomor");

          				$no = 1;
         		 		while ($d=mysqli_fetch_array($data)) {
           			?>
      					<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['pinjam_id']; ?></td>
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