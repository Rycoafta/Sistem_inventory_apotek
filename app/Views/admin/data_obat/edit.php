<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
EDIT
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header" >
        <div class="row">
            <div class="col-lg-12">
                <p class="card-title">Edit Data Obat</p>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <form method="POST" action="<?= route_to('data_obat/update', $dataObat['id']); ?>">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="kode_obat">Kode Obat</label>
            <input type="text" class="form-control" id="kode_obat" value="<?= old('kode_obat') ?: $dataObat['kode_obat']; ?>" name="kode_obat" required autofocus>
            <?php if (session('errors.kode_obat')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.kode_obat') ?></strong>
                </span>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" value="<?= old('nama_obat') ?: $dataObat['nama_obat']; ?>" name="nama_obat" required autofocus>
            <?php if (session('errors.nama_obat')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.nama_obat') ?></strong>
                </span>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="hb_obat">Harga Beli</label>
            <input type="text" class="form-control" id="hb_obat" value="<?= old('hb_obat') ?: $dataObat['hb_obat']; ?>" name="hb_obat" required autofocus>
            <?php if (session('errors.hb_obat')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.hb_obat') ?></strong>
                </span>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="hj_obat">Harga Jual</label>
            <input type="text" class="form-control" id="hj_obat" value="<?= old('hj_obat') ?: $dataObat['hj_obat']; ?>" name="hj_obat" required autofocus>
            <?php if (session('errors.hj_obat')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.hj_obat') ?></strong>
                </span>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control" id="jenis" value="<?= old('jenis') ?: $dataObat['jenis']; ?>" name="jenis" required autofocus>
            <?php if (session('errors.jenis')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.jenis') ?></strong>
                </span>
            <?php endif ?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success mb-2">Submit</button>
            <a href="<?= route_to('data_obat'); ?>" class="btn btn-secondary mb-2">Batal</a>
        </div>
    </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<?= $this->endSection() ?>