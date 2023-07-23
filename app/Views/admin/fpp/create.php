<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Pengajuan Pembelian
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">PENGAJUAN PEMBELIAN BARANG</h3>
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
                <input type="text" class="form-control" id="jenis_kebutuhan" placeholder="Masukkan Jenis Kebutuhan" value="<?= old('jenis_kebutuhan'); ?>" name="jenis_kebutuhan" required autocomplete="jenis_kebutuhan">
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
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" value="<?= old('keterangan'); ?>" name="keterangan" required autocomplete="keterangan">
                <?php if (session('errors.keterangan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.keterangan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            
            <div class="">
                <button type="submit" class="btn btn-primary">Ajukan</button>
            </div>
        </div>
        <!-- /.card-body -->
    </form>
</div>
<?= $this->endSection() ?>