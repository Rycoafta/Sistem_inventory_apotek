<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Pengajuan Pembelian
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">PENGAJUAN PERMINTAAN PENGADAAN</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('fpp/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="tanggal">Tanggal Pemakaian</label>
                <input type="date" class="form-control" id="tanggal" value="<?= old('tanggal'); ?>" name="tanggal" required autocomplete="tanggal" autofocus>
                <?php if (session('errors.tanggal')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.tanggal') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="jenis_kebutuhan">Jenis Kebutuhan</label>
                <select class="form-control" id="jenis_kebutuhan" placeholder="Masukkan Jenis Kebutuhan" value="<?= old('jenis_kebutuhan'); ?>" name="jenis_kebutuhan" required autocomplete="jenis_kebutuhan">
                    <option selected>Pilih...</option>
                        <option>Rutin</option>
                        <option>Non-Rutin</option>
                        <option>Segera</option>
                </select>
                <?php if (session('errors.jenis_kebutuhan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.jenis_kebutuhan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" value="<?= old('nama_pelanggan'); ?>" name="nama_pelanggan" required autocomplete="nama_pelanggan">
                <?php if (session('errors.nama_pelanggan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_pelanggan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="lokasi_penempatan">Lokasi Penempatan</label>
                <input type="text" class="form-control" id="lokasi_penempatan" placeholder="Masukkan Lokasi Penempatan" value="<?= old('lokasi_penempatan'); ?>" name="lokasi_penempatan" required autocomplete="lokasi_penempatan">
                <?php if (session('errors.lokasi_penempatan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.lokasi_penempatan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="ref">Nomor</label>
                <input type="text" class="form-control" id="ref" placeholder="Masukkan Nomor" value="<?= old('ref'); ?>" name="ref" required autocomplete="ref">
                <?php if (session('errors.ref')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.ref') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="ref_fpb">ID FPB</label>
                <input type="text" class="form-control" id="ref_fpb" placeholder="Masukkan ID FPB" value="<?= old('ref_fpb'); ?>" name="ref_fpb" required autocomplete="ref_fpb">
                <?php if (session('errors.ref_fpb')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.ref_fpb') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" value="<?= old('keterangan'); ?>" name="keterangan" required autocomplete="keterangan">
                <?php if (session('errors.keterangan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.keterangan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
                <div class="row">
                    <div class="form-group col-3 mr-2 text-center">
                    <label for="nama_barang">Nama/Jenis</label>
                    <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan Nama/Jenis" value="<?= old('nama_barang'); ?>" name="nama_barang" required autocomplete="nama_barang">
                    <?php if (session('errors.nama_barang')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_barang') ?></strong>
                    </span>
                    <?php endif ?>
                </div>
                <div class="form-group col-1 mr-2 text-center">
                    <label for="id_barang">ID Barang</label>
                    <input type="text" class="form-control" id="id_barang" placeholder="Masukkan ID Barang" value="<?= old('id_barang'); ?>" name="id_barang" required autocomplete="id_barang">
                    <?php if (session('errors.id_barang')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.id_barang') ?></strong>
                    </span>
                    <?php endif ?>
                </div>
                <div class="form-group col-3 mr-2 text-center">
                    <label for="tipe">Tipe</label>
                    <input type="text" class="form-control" id="tipe" placeholder="Masukkan Tipe" value="<?= old('tipe'); ?>" name="tipe" required autocomplete="tipe">
                    <?php if (session('errors.tipe')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.tipe') ?></strong>
                    </span>
                    <?php endif ?>
                </div>
                <div class="form-group col-3 mr-2 text-center">
                    <label for="harga_satuan">Harga Satuan Terendah</label>
                    <input type="text" class="form-control" id="harga_satuan" placeholder="Masukkan Harga Satuan Terendah" value="<?= old('harga_satuan'); ?>" name="harga_satuan" required autocomplete="harga_satuan">
                    <?php if (session('errors.harga_satuan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.harga_satuan') ?></strong>
                    </span>
                    <?php endif ?>
                </div>
                <div class="form-group col-1 mr-2 text-center">
                    <label for="qty">Qty</label>
                    <input type="text" class="form-control" id="qty" placeholder="Masukkan Kuantitas" value="<?= old('qty'); ?>" name="qty" required autocomplete="qty">
                    <?php if (session('errors.qty')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.qty') ?></strong>
                    </span>
                    <?php endif ?>
                </div>
                <div class="form-group col-3 mr-2 text-center">
                    <label for="jumlah">Jumlah Harga</label>
                    <input type="text" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Harga" value="<?= old('jumlah'); ?>" name="jumlah" required autocomplete="jumlah">
                    <?php if (session('errors.jumlah')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.jumlah') ?></strong>
                    </span>
                    <?php endif ?>
                </div>
                <div class="form-group col-4 mr-2 text-center">
                    <label for="vendor">Vendor/Supplier</label>
                    <input type="text" class="form-control" id="vendor" placeholder="Masukkan Vendor/Supplier" value="<?= old('vendor'); ?>" name="vendor" required autocomplete="vendor">
                    <?php if (session('errors.vendor')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.vendor') ?></strong>
                    </span>
                    <?php endif ?>
                </div>
            </div>
            </div>
          
            <div class="">
                <button type="submit" class="btn btn-primary">Ajukan</button>
            </div>
        </div>
        <!-- /.card-body -->
    </form>
</div>
<?= $this->endSection() ?>