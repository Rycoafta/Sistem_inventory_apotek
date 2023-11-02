<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
DETAIL
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header" >
        <div class="row">
            <div class="col-lg-12">
                <p class="card-title">Data Obat</p>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <form>
        <div class="form-group">
            <label for="kode_obat">Kode Obat</label>
            <input type="text" class="form-control" id="kode_obat" value="<?= $dataObat['kode_obat']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" value="<?= $dataObat['nama_obat']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="hb_obat">Harga Beli</label>
            <input type="text" class="form-control" id="hb_obat" value="<?= $dataObat['hb_obat']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="hj_obat">Harga Jual</label>
            <input type="text" class="form-control" id="hj_obat" value="<?= $dataObat['hj_obat']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stok">Jumlah Stok</label>
            <input type="number" class="form-control" id="stok" value="<?= $dataObat['stok']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control" id="jenis" value="<?= $dataObat['jenis']; ?>" readonly>
        </div>
        <div class="form-group">
            <a href="<?= route_to('data_obat'); ?>" class="btn btn-secondary mb-2">Kembali</a>
        </div>
    </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<?= $this->endSection() ?>