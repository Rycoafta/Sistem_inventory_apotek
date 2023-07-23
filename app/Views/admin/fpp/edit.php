<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Edit Pengajuan Pembelian Barang
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Edit</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('fpp/update', $fpp['id']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="id">ID FPP</label>
                <input type="text" class="form-control" id="id" value="<?= $fpp['id']; ?>" readonly name="id">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control <?= session('error.tanggal') ? 'is-invalid' : ''; ?>" id="tanggal" value="<?= old('tanggal') ?: $fpp['tanggal']; ?>" name="tanggal" required autofocus>
                <?php if (session('error.tanggal')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.tanggal') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="jenis_kebutuhan">Jenis Kebutuhan</label>
                <input type="text" class="form-control <?= session('error.jenis_kebutuhan') ? 'is-invalid' : ''; ?>" id="jenis_kebutuhan" value="<?= old('jenis_kebutuhan') ?: $fpp['jenis_kebutuhan']; ?>" name="jenis_kebutuhan" required autofocus>
                <?php if (session('error.jenis_kebutuhan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.jenis_kebutuhan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="nama_pelanggan">Nama Barang</label>
                <input type="text" class="form-control <?= session('error.nama_pelanggan') ? 'is-invalid' : ''; ?>" id="nama_pelanggan" value="<?= old('nama_pelanggan') ?: $fpp['nama_pelanggan']; ?>" name="nama_pelanggan" required autofocus>
                <?php if (session('error.nama_pelanggan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.nama_pelanggan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="lokasi_penempatan">Lokasi Penempatan</label>
                <input type="text" class="form-control <?= session('error.lokasi_penempatan') ? 'is-invalid' : ''; ?>" id="lokasi_penempatan" value="<?= old('lokasi_penempatan') ?: $fpp['lokasi_penempatan']; ?>" name="lokasi_penempatan" required autofocus>
                <?php if (session('error.lokasi_penempatan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.lokasi_penempatan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control <?= session('error.keterangan') ? 'is-invalid' : ''; ?>" id="keterangan" value="<?= old('keterangan') ?: $fpp['keterangan']; ?>" name="keterangan" required autofocus>
                <?php if (session('error.keterangan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.keterangan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
        </div>  
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ajukan</button>
            <a href="<?= route_to('fpp'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>