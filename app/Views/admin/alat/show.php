<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
DETAIL
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">DETAIL BARANG</h3>
    </div>
    <!-- /.card-header -->
        <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" id="nama" value="<?= $fpp['nama']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" class="form-control" id="stok" value="<?= $fpp['stok']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('alat'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>