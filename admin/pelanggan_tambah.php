<?php include 'header.php' ; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah pelanggan Baru</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="pelanggan_aksi.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" palaceholder="Masukan nama..">
                    </div>
                    <div class="form-group">
                        <label>Hp</label>
                        <input type="number" class="form-control" name="hp" palaceholder="Masukan no.hp..">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" palaceholder="Masukan Alamat..">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="simpan">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ; ?>