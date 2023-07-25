<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
HISTORY
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">HISTORY</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" value="<?= $history2['id']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="datetime" class="form-control" id="nama" value="<?= $history2['tanggal']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="ref">Ref./WO/Tanggal</label>
            <input type="text" class="form-control" id="nama" value="<?= $history2['ref']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_peminjam">Nama</label>
            <input type="text" class="form-control" id="nama_peminjam" value="<?= $history2['nama_peminjam']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="divisi">Divisi</label>
            <input type="text" class="form-control" id="divisi" value="<?= $history2['divisi']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lokasi_penempatan">Lokasi Penempatan</label>
            <input type="text" class="form-control" id="lokasi_penempatan" value="<?= $history2['lokasi_penempatan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="kebutuhan_projek">Kebutuhan Projek</label>
            <input type="text" class="form-control" id="kebutuhan_projek" value="<?= $history2['kebutuhan_projek']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" value="<?= $history2['keterangan']; ?>" readonly>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" value="<?= $history2['nama_barang']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="idbarang">ID Barang</label>
                <input type="text" class="form-control" id="idbarang" value="<?= $history2['idbarang']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="tipe">Tipe</label>
                <input type="text" class="form-control" id="tipe" value="<?= $history2['tipe']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="qty">Qty</label>
                <input type="text" class="form-control" id="qty" value="<?= $history2['qty']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <input type="text" class="form-control" id="note" value="<?= $history2['note']; ?>" readonly>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    
    <div class="card-footer">
        <a href="<?= route_to('history'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>