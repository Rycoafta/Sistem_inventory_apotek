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
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Barang" value="<?= old('nama'); ?>" name="nama" required autocomplete="nama">
                <?php if (session('errors.nama')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama') ?></strong>
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