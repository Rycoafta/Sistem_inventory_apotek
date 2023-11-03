<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
DETAIL
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header" >
        <div class="row">
            <div class="col-lg-12">
                <p class="card-title">Data Masuk</p>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <form>
        <div class="form-group">
            <label for="kode_transaksi">Kode Transaksi</label>
            <input type="text" class="form-control" id="kode_transaksi" value="<?= $datamasuk['kode_transaksi']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form-control" id="tanggal" value="<?= $datamasuk['tanggal']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="obat">Nama Obat</label>
            <input type="text" class="form-control" id="obat" value="<?= $datamasuk['obat']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="jlh_stok">Stok</label>
            <input type="number" class="form-control" id="jlh_stok" value="<?= $datamasuk['jlh_stok']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis Obat</label>
            <input type="text" class="form-control" id="jenis" value="<?= $datamasuk['jenis']; ?>" readonly>
        </div>
        <div class="form-group">
            <a href="<?= route_to('data_masuk'); ?>" class="btn btn-secondary mb-2">Kembali</a>
        </div>
    </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<?= $this->endSection() ?>