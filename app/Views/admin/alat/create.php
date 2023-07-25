<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
INPUT BARANG
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">PENAMBAHAN BARANG</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('alat/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_alat">Kode Barang</label>
                <input type="text" class="form-control" id="kode_alat" placeholder="Masukkan kode_alat Barang" value="<?= old('kode_alat'); ?>" name="kode_alat" required autocomplete="kode_alat">
                <?php if (session('errors.kode_alat')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.kode_alat') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="nama_alat">Nama Barang</label>
                <input type="text" class="form-control" id="nama_alat" placeholder="Masukkan nama_alat Barang" value="<?= old('nama_alat'); ?>" name="nama_alat" required autocomplete="nama_alat">
                <?php if (session('errors.nama_alat')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_alat') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" id="stok" placeholder="Masukkan Stok Barang" value="<?= old('stok'); ?>" name="stok" required autocomplete="stok">
                <?php if (session('errors.stok')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.stok') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            
            <div class="">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
        </div>
        <!-- /.card-body -->
    </form>
</div>
<?= $this->endSection() ?>