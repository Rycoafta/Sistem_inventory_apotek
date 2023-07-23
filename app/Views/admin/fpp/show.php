<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Detail Pengajuan Pembelian
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Detail Pengajuan Pembelian</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="id">ID FPP</label>
            <input type="text" class="form-control" id="id" value="<?= $fpp['id']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="datetime" class="form-control" id="tanggal" value="<?= $fpp['tanggal']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="jenis_kebutuhan">Jenis Kebutuhan</label>
            <input type="text" class="form-control" id="jenis_kebutuhan" value="<?= $fpp['jenis_kebutuhan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama_pelanggan" value="<?= $fpp['nama_pelanggan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" value="<?= $fpp['keterangan']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('fpp'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>