<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Detail Pengajuan Pembelian
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Detail Pengajuan Permintaan</h3>
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
            <label for="lokasi_penempatan">Lokasi Penempatan</label>
            <input type="text" class="form-control" id="lokasi_penempatan" value="<?= $fpp['lokasi_penempatan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="ref">Nomor</label>
            <input type="text" class="form-control" id="ref" value="<?= $fpp['ref']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="ref_fpb">ID FPB</label>
            <input type="text" class="form-control" id="ref_fpb" value="<?= $fpp['ref_fpb']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" value="<?= $fpp['keterangan']; ?>" readonly>
        </div>
        <div class="row">
            <div class="form-group col-3 mr-2 text-center">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" value="<?= $fpp['nama_barang']; ?>" readonly>
            </div>
            <div class="form-group col-1 mr-2 text-center">
                <label for="id_barang">ID Barang</label>
                <input type="text" class="form-control" id="id_barang" value="<?= $fpp['id_barang']; ?>" readonly>
            </div>
            <div class="form-group col-3 mr-2 text-center">
                <label for="tipe">Tipe</label>
                <input type="text" class="form-control" id="tipe" value="<?= $fpp['tipe']; ?>" readonly>
            </div>
            <div class="form-group col-3 mr-2 text-center">
                <label for="harga_satuan">Harga Satuan Terendah</label>
                <input type="text" class="form-control" id="harga_satuan" value="<?= $fpp['harga_satuan']; ?>" readonly>
            </div>
            <div class="form-group col-1 mr-2 text-center">
                <label for="qty">Qty</label>
                <input type="text" class="form-control" id="qty" value="<?= $fpp['qty']; ?>" readonly>
            </div>
            <div class="form-group col-3 mr-2 text-center">
                <label for="jumlah">Jumlah Harga</label>
                <input type="text" class="form-control" id="jumlah" value="<?= $fpp['jumlah']; ?>" readonly>
            </div>
            <div class="form-group col-4 mr-2 text-center">
                <label for="vendor">Vendor/Supplier</label>
                <input type="text" class="form-control" id="vendor" value="<?= $fpp['vendor']; ?>" readonly>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('fpp'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>