<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
EDIT
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header" >
        <div class="row">
            <div class="col-lg-12">
                <p class="card-title">Edit Data Masuk</p>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <form method="POST" action="<?= route_to('data_masuk/update', $datamasuk['id']); ?>">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="kode_transaksi">Kode Transaksi</label>
            <input type="text" class="form-control" id="kode_transaksi" value="<?= old('kode_transaksi') ?: $datamasuk['kode_transaksi']; ?>" name="kode_transaksi" required autofocus>
            <?php if (session('errors.kode_transaksi')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.kode_transaksi') ?></strong>
                </span>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form-control" id="tanggal" value="<?= old('tanggal') ?: $datamasuk['tanggal']; ?>" name="tanggal" required autofocus>
            <?php if (session('errors.tanggal')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.tanggal') ?></strong>
                </span>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="obat">Nama Obat</label>
            <input type="text" class="form-control" id="obat" value="<?= old('obat') ?: $datamasuk['obat']; ?>" name="obat" required autofocus>
            <?php if (session('errors.obat')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.obat') ?></strong>
                </span>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="jlh_stok">Stok</label>
            <input type="number" class="form-control" id="jlh_stok" value="<?= old('jlh_stok') ?: $datamasuk['jlh_stok']; ?>" name="jlh_stok" required autofocus>
            <?php if (session('errors.jlh_stok')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.jlh_stok') ?></strong>
                </span>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis Obat</label>
            <input type="text" class="form-control" id="jenis" value="<?= old('jenis') ?: $datamasuk['jenis']; ?>" name="jenis" required autofocus>
            <?php if (session('errors.jenis')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.jenis') ?></strong>
                </span>
            <?php endif ?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success mb-2">Submit</button>
            <a href="<?= route_to('data_masuk'); ?>" class="btn btn-secondary mb-2">Batal</a>
        </div>
    </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<?= $this->endSection() ?>