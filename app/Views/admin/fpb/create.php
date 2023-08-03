<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Pengajuan Peminjaman
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">PENGAJUAN PERMINTAAN BARANG</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('fpb/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="id">ID FPB</label>
                <input type="text" class="form-control" id="id" placeholder="Masukkan ID FPB" value="<?= old('id'); ?>" name="id" required autocomplete="id" autofocus>
                <?php if (session('errors.id')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.id') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="datetime-local" class="form-control" id="tanggal" placeholder="Masukkan Tanggal" value="<?= old('tanggal'); ?>" name="tanggal" required autocomplete="tanggal">
                <?php if (session('errors.tanggal')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.tanggal') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="ref">Ref./WO/Tanggal</label>
                <input type="text" class="form-control" id="ref" placeholder="Masukkan Ref./WO/Tanggal" value="<?= old('ref'); ?>" name="ref" required autocomplete="ref">
                <?php if (session('errors.ref')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.ref') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="nama_peminjam">Nama</label>
                <input type="text" class="form-control" id="nama_peminjam" placeholder="Masukkan Nama" value="<?= old('nama_peminjam'); ?>" name="nama_peminjam" required autocomplete="nama_peminjam">
                <?php if (session('errors.nama_peminjam')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_peminjam') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="divisi">Divisi</label>
                <input type="text" class="form-control" id="divisi" placeholder="Masukkan Divisi" value="<?= old('divisi'); ?>" name="divisi" required autocomplete="divisi">
                <?php if (session('errors.divisi')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.divisi') ?></strong>
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
                <label for="kebutuhan_projek">Kebutuhan Projek</label>
                <input type="text" class="form-control" id="kebutuhan_projek" placeholder="Masukkan Kebutuhan Projek" value="<?= old('kebutuhan_projek'); ?>" name="kebutuhan_projek" required autocomplete="kebutuhan_projek">
                <?php if (session('errors.kebutuhan_projek')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.kebutuhan_projek') ?></strong>
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
                    <label for="nama_barang">Nama Barang</label>
                    <select class="form-control" id="nama_barang" placeholder="Pilih Nama/Jenis" value="<?= old('nama_barang'); ?>" name="nama_barang" required autocomplete="nama_barang">
                    <option selected>Pilih...</option>
                        <?php $i = 1; foreach ($alats as $alat) : ?>
                        <option><?= $alat['kode_alat'] ?> || <?= $alat['nama_alat'] ?></option>
                    <?php endforeach; ?>
                    </select>
                    <?php if (session('errors.nama_barang')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_barang') ?></strong>
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
                <div class="form-group col-1 mr-2 text-center">
                    <label for="qty">Qty</label>
                    <input type="text" class="form-control" id="qty" placeholder="Masukkan Kuantitas" value="<?= old('qty'); ?>" name="qty" required autocomplete="qty">
                    <?php if (session('errors.qty')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.qty') ?></strong>
                    </span>
                <?php endif ?>
                </div>
                <div class="form-group col-4 mr-2 text-center">
                    <label for="note">Note</label>
                    <input type="text" class="form-control" id="note" placeholder="Masukkan Note" value="<?= old('note'); ?>" name="note" required autocomplete="note">
                    <?php if (session('errors.note')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.note') ?></strong>
                    </span>
                <?php endif ?>
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