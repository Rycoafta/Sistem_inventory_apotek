<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
FORM PEMINJAMAN BARANG
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<form>
        <!-- Element-elemen form -->
        <button type="button" id="btnPrint">Cetak</button>
    </form>

    <script>
        document.getElementById("btnPrint").addEventListener("click", function() {
            window.print();
        });
    </script>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Detail Permintaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" value="<?= $fpb['id']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="datetime" class="form-control" id="tanggal" value="<?= $fpb['tanggal']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="ref">Ref./WO/Tanggal</label>
            <input type="text" class="form-control" id="ref" value="<?= $fpb['ref']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_peminjam">Nama</label>
            <input type="text" class="form-control" id="nama_peminjam" value="<?= $fpb['nama_peminjam']; ?>" readonly>
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
        <div class="formbarang">
            <div class="row duplicate-row">
                <div class="form-group col-3 mr-2 text-center">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" value="<?= $fpb['nama_barang']; ?>" readonly>
                </div>
                <div class="form-group col-3 mr-2 text-center">
                    <label for="tipe">Tipe</label>
                    <input type="text" class="form-control" id="tipe" value="<?= $fpb['tipe']; ?>" readonly>
                </div>
                <div class="form-group col-1 mr-2 text-center">
                    <label for="qty">Qty</label>
                    <input type="text" class="form-control" id="qty" value="<?= $fpb['qty']; ?>" readonly>
                </div>
                <div class="form-group col-4 mr-2 text-center">
                    <label for="note">Note</label>
                    <input type="text" class="form-control" id="note" value="<?= $fpb['note']; ?>" readonly>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('fpb'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>