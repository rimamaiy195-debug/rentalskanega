<?php
    include 'header.php';
?>

<?php
    include '../koneksi.php';
?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Edit Kendaraan</h4>
        </div>
        <div class="panel-body">
            


            <div class="col-md-9 col-md-offset-1">
                <a href="kendaraan.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                <br>
                <br>
                <?php
                $no = $_GET['no'];

                $kendaraan = mysqli_query($koneksi,"select * from kendaraan where kendaraan_nomor='$no'");
                while ($n=mysqli_fetch_array($kendaraan)) {
                ?>
                <form method="post" action="kendaraan_update.php">
                    <input type="hidden" name="kendaraan_nomor" value="<?php echo $n['kendaraan_nomor']; ?>">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="kendaraan_nama" placeholder="Masukkan nama kendaraan .." required="required" value="<?php echo $n['kendaraan_nama']?>">
                    </div>

                    <div class="form-group">
                        <label>Tipe</label>
                        <input type="text" class="form-control" name="kendaraan_tipe" placeholder="Masukkan tipe .." required="required" value="<?php echo $n['kendaraan_tipe']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Harga Perhari</label>
                        <input type="text" class="form-control" name="kendaraan_harga_perhari" required="required" value="<?php echo $n['kendaraan_harga_perhari']; ?>">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>