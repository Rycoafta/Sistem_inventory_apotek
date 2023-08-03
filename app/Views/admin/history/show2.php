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
            <label for="id">ID FPP</label>
            <input type="text" class="form-control" id="id" value="<?= $history1['id']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="datetime" class="form-control" id="tanggal" value="<?= $history1['tanggal']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="jenis_kebutuhan">Jenis Kebutuhan</label>
            <input type="text" class="form-control" id="jenis_kebutuhan" value="<?= $history1['jenis_kebutuhan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama_pelanggan" value="<?= $history1['nama_pelanggan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lokasi_penempatan">Lokasi Penempatan</label>
            <input type="text" class="form-control" id="lokasi_penempatan" value="<?= $history1['lokasi_penempatan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="ref">Nomor</label>
            <input type="text" class="form-control" id="ref" value="<?= $history1['ref']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="ref_fpb">ID FPB</label>
            <input type="text" class="form-control" id="ref_fpb" value="<?= $history1['ref_fpb']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" value="<?= $history1['keterangan']; ?>" readonly>
        </div>
        <div class="row">
            <div class="form-group col-3 mr-2 text-center">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" value="<?= $history1['nama_barang']; ?>" readonly>
            </div>
            <div class="form-group col-1 mr-2 text-center">
                <label for="id_barang">ID Barang</label>
                <input type="text" class="form-control" id="id_barang" value="<?= $history1['id_barang']; ?>" readonly>
            </div>
            <div class="form-group col-3 mr-2 text-center">
                <label for="tipe">Tipe</label>
                <input type="text" class="form-control" id="tipe" value="<?= $history1['tipe']; ?>" readonly>
            </div>
            <div class="form-group col-3 mr-2 text-center">
                <label for="harga_satuan">Harga Satuan Terendah</label>
                <input type="text" class="form-control" id="harga_satuan" value="<?= $history1['harga_satuan']; ?>" readonly>
            </div>
            <div class="form-group col-1 mr-2 text-center">
                <label for="qty">Qty</label>
                <input type="text" class="form-control" id="qty" value="<?= $history1['qty']; ?>" readonly>
            </div>
            <div class="form-group col-3 mr-2 text-center">
                <label for="jumlah">Jumlah Harga</label>
                <input type="text" class="form-control" id="jumlah" value="<?= $history1['jumlah']; ?>" readonly>
            </div>
            <div class="form-group col-4 mr-2 text-center">
                <label for="vendor">Vendor/Supplier</label>
                <input type="text" class="form-control" id="vendor" value="<?= $history1['vendor']; ?>" readonly>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    
    <div class="card-footer">
        <a href="<?= route_to('history'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>