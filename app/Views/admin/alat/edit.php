<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
EDIT DETAIL BARANG
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">EDIT DETAIL BARANG</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('alat/update', $alat['id']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="id">ID Barang</label>
                <input type="text" class="form-control" id="id" value="<?= $alat['id']; ?>" readonly name="id">
            </div>
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control <?= session('error.nama') ? 'is-invalid' : ''; ?>" id="nama" value="<?= old('nama') ?: $alat['nama']; ?>" name="nama" required autofocus>
                <?php if (session('error.nama')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.nama') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control <?= session('error.stok') ? 'is-invalid' : ''; ?>" id="stok" value="<?= old('stok') ?: $alat['stok']; ?>" name="stok" required autofocus>
                <?php if (session('error.stok')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.stok') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            
        </div>  
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= route_to('alat'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>