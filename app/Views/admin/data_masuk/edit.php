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
            <label for="stok">Jumlah Stok</label>
            <input type="number" class="form-control" id="stok" value="<?= old('stok') ?: $datamasuk['stok']; ?>" name="stok" required autofocus>
            <?php if (session('errors.stok')) : ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?= session('errors.stok') ?></strong>
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