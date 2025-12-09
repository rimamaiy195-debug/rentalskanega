<?php
    include 'header.php'; 
    include '../koneksi.php';
?>

<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Kendaraan Baru</h4>
            </div>
            <div class="panel-body">

                <form method="post" action="kendaraan_aksi.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama kendaraan ..">
                    </div>

                    <div class="form-group">
                        <label>Nomor kendaraan</label>
                        <input type="text" class="form-control" name="kendaraan_nomor" placeholder="Masukkan nomor kendaraan ..">
                    </div>


                    <div class="form-group">
                        <label>Tipe</label>
                        <input type="text" class="form-control" name="tipe" placeholder="Masukkan tipe kendaraan ..">
                    </div>

                    <div class="form-group">
                        <label>Harga perhari</label>
                        <input type="text" class="form-control" name="harga_perhari" placeholder="Masukkan harga perhari ..">
                    </div>

                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>


            </div>
        </div>
    </div>
    
</div>