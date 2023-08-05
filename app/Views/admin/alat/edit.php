<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Edit
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Edit</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('alat/update', $alat['id']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_alat">ID Barang</label>
                <input type="text" class="form-control" kode_alat="kode_alat" value="<?= $alat['kode_alat']; ?>" name="kode_alat" required autofocus>
                <?php if (session('error.kode_alat')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.kode_alat') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="nama_alat">Nama Barang</label>
                <input type="text" class="form-control" nama_alat="nama_alat" value="<?= $alat['nama_alat']; ?>" name="nama_alat" required autofocus>
                <?php if (session('error.nama_alat')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.nama_alat') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" stok="stok" value="<?= $alat['stok']; ?>" name="stok" required autofocus>
                <?php if (session('error.stok')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.stok') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            
            
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= route_to('alat'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>