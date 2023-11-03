<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
INPUT DATA MASUK
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">DATA OBAT MASUK</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('data_masuk/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_transaksi">Kode Transaksi</label>
                <input type="text" class="form-control" id="kode_transaksi" placeholder="Masukkan Kode Transaksi" value="<?= old('kode_transaksi'); ?>" name="kode_transaksi" required autocomplete="kode_transaksi" autofocus>
                <?php if (session('errors.kode_transaksi')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.kode_transaksi') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="datetime-local" class="form-control" id="tanggal" placeholder="Masukkan tanggal" value="<?= old('tanggal'); ?>" name="tanggal" required autocomplete="tanggal">
                <?php if (session('errors.tanggal')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.tanggal') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="obat">Nama Obat</label>
                <input type="text" class="form-control" id="obat" placeholder="Masukkan Jumlah Stok" value="<?= old('obat'); ?>" name="obat" required autocomplete="obat">
                <?php if (session('errors.obat')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.obat') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="jlh_stok">Jumlah Stok</label>
                <input type="text" class="form-control" id="jlh_stok" placeholder="Masukkan Jumlah Stok" value="<?= old('jlh_stok'); ?>" name="jlh_stok" required autocomplete="jlh_stok">
                <?php if (session('errors.jlh_stok')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.jlh_stok') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Obat</label>
                <input type="text" class="form-control" id="jenis" placeholder="Pilih Jenis Obat" value="<?= old('jenis'); ?>" name="jenis" required autocomplete="jenis">
                <?php if (session('errors.jenis')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.jenis') ?></strong>
                    </span>
                <?php endif ?>
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div> 
        </div>
        <!-- /.card-body -->
    </form>
</div>
<?= $this->endSection() ?>