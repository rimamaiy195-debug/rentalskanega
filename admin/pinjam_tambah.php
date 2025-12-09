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
                <h4>Tambah Pinjam Baru</h4>
            </div>
            <div class="panel-body">

                <form method="post" action="pinjam_aksi.php">

                    <div class="form-group">
                        <label>ID Pinjam</label>
                        <input type="text" class="form-control" name="id">
                    </div>

                    <div class="form-group">
                        <label>Nomor Kendaraan</label>
                        <input type="text" class="form-control" name="kendaraan_nomor">
                    </div>

                    <div class="form-group">
                        <label>User ID</label>
                        <input type="text" class="form-control" name="user_id">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input type="date" class="form-control" name="tgl_pinjam">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tgl_kembali">
                    </div>

                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">

                </form>



            </div>
        </div>
    </div>
    
</div>