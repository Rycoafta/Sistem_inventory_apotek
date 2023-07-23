<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
FORM PEMINJAMAN BARANG
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Detail Peminjaman</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" value="<?= $fpb['id']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="datetime" class="form-control" id="nama" value="<?= $fpb['tanggal']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="ref">Ref./WO/Tanggal</label>
            <input type="text" class="form-control" id="nama" value="<?= $fpb['ref']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" value="<?= $fpb['nama']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="divisi">Divisi</label>
            <input type="text" class="form-control" id="divisi" value="<?= $fpb['divisi']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lokasi_penempatan">Lokasi Penempatan</label>
            <input type="text" class="form-control" id="lokasi_penempatan" value="<?= $fpb['lokasi_penempatan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="kebutuhan_projek">Kebutuhan Projek</label>
            <input type="text" class="form-control" id="kebutuhan_projek" value="<?= $fpb['kebutuhan_projek']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" value="<?= $fpb['keterangan']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('fpb'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>