<?php
include 'header.php';
include '../koneksi.php';

$id = $_GET['id'];
$pinjam = mysqli_query($koneksi, "SELECT * FROM pinjam WHERE pinjam_id='$id'");
$p = mysqli_fetch_array($pinjam);
?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Edit Pinjam</h4>
        </div>
        <div class="panel-body">

            <div class="col-md-9 col-md-offset-1">
                <a href="pinjam.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                <br><br>

                <form method="post" action="pinjam_update.php">

                    <!-- ID Pinjam -->
                    <input type="hidden" name="pinjam_id" value="<?php echo $p['pinjam_id']; ?>">

                    <!-- USER -->
                    <div class="form-group">
                        <label>Nama User</label>
                        <select class="form-control" name="user_id" required>
                            <?php
                            $u = mysqli_query($koneksi, "SELECT * FROM user");
                            while ($d = mysqli_fetch_array($u)) {
                            ?>
                                <option value="<?php echo $d['user_id']; ?>"
                                    <?php if ($d['user_id'] == $p['user_id']) echo "selected"; ?>>
                                    <?php echo $d['user_nama']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <!-- KENDARAAN -->
                    <div class="form-group">
                        <label>Nama Kendaraan</label>
                        <select class="form-control" name="kendaraan_nomor" required>
                            <?php
                            $k = mysqli_query($koneksi, "SELECT * FROM kendaraan");
                            while ($n = mysqli_fetch_array($k)) {
                            ?>
                                <option value="<?php echo $n['kendaraan_nomor']; ?>"
                                    <?php if ($n['kendaraan_nomor'] == $p['kendaraan_nomor']) echo "selected"; ?>>
                                    <?php echo $n['kendaraan_nama']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <!-- TANGGAL -->
                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input type="date" class="form-control" name="tgl_pinjam"
                               value="<?php echo $p['tgl_pinjam']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tgl_kembali"
                               value="<?php echo $p['tgl_kembali']; ?>" required>
                    </div>

                    <!-- STATUS -->
                    <div class="form-group alert alert-info">
                        <label>Status</label>
                        <select class="form-control" name="pinjam_status" required>
                            <option value="1" <?php if ($p['pinjam_status']==1) echo "selected"; ?>>Ready</option>
                            <option value="2" <?php if ($p['pinjam_status']==2) echo "selected"; ?>>Dipinjam</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Simpan">

                </form>

            </div>

        </div>
    </div>
</div>
