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
            <label for="kode_alat">Kode Barang</label>
            <input type="text" class="form-control" id="kode_alat" value="<?= $alat['kode_alat']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_alat">Nama Barang</label>
            <input type="text" class="form-control" id="nama_alat" value="<?= $alat['nama_alat']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" class="form-control" id="stok" value="<?= $alat['stok']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('alat'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>