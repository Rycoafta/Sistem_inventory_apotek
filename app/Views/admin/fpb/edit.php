<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Edit
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Edit</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('fpb/update', $fpb['id']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" value="<?= $fpb['id']; ?>" readonly name="id">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control <?= session('error.tanggal') ? 'is-invalid' : ''; ?>" id="tanggal" value="<?= old('tanggal') ?: $fpb['tanggal']; ?>" name="tanggal" required autofocus>
                <?php if (session('error.tanggal')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.tanggal') ?></strong>
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
                <input type="text" class="form-control <?= session('error.nama_peminjam') ? 'is-invalid' : ''; ?>" id="nama_peminjam" value="<?= old('nama_peminjam') ?: $fpb['nama_peminjam']; ?>" name="nama_peminjam" required autofocus>
                <?php if (session('error.nama_peminjam')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.nama_peminjam') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="divisi">Divisi</label>
                <input type="text" class="form-control <?= session('error.divisi') ? 'is-invalid' : ''; ?>" id="divisi" value="<?= old('divisi') ?: $fpb['divisi']; ?>" name="divisi" required autofocus>
                <?php if (session('error.divisi')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.divisi') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="lokasi_penempatan">Lokasi Penempatan</label>
                <input type="text" class="form-control <?= session('error.lokasi_penempatan') ? 'is-invalid' : ''; ?>" id="lokasi_penempatan" value="<?= old('lokasi_penempatan') ?: $fpb['lokasi_penempatan']; ?>" name="lokasi_penempatan" required autofocus>
                <?php if (session('error.lokasi_penempatan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.lokasi_penempatan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="kebutuhan_projek">Kebutuhan Projek</label>
                <input type="text" class="form-control <?= session('error.kebutuhan_projek') ? 'is-invalid' : ''; ?>" id="kebutuhan_projek" value="<?= old('kebutuhan_projek') ?: $fpb['kebutuhan_projek']; ?>" name="kebutuhan_projek" required autofocus>
                <?php if (session('error.kebutuhan_projek')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.kebutuhan_projek') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control <?= session('error.keterangan') ? 'is-invalid' : ''; ?>" id="keterangan" value="<?= old('keterangan') ?: $fpb['keterangan']; ?>" name="keterangan" required autofocus>
                <?php if (session('error.keterangan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.keterangan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="formbarang">
                <div class="row duplicate-row">
                    <div class="form-group col-3 mr-2 text-center">
                        <label for="nama_barang">Nama Barang</label>
                        <select class="form-control" id="nama_barang" placeholder="Pilih Nama/Jenis" value="<?= old('nama_barang') ?: $fpb['nama_barang']; ?>" name="nama_barang" required autocomplete="nama_barang">
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
                        <input type="text" class="form-control" id="tipe" placeholder="Masukkan Tipe" value="<?= old('tipe') ?: $fpb['tipe']; ?>" name="tipe" required autocomplete="tipe">
                        <?php if (session('errors.tipe')) : ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?= session('errors.tipe') ?></strong>
                        </span>
                    <?php endif ?>
                    </div>
                    <div class="form-group col-1 mr-2 text-center">
                        <label for="qty">Qty</label>
                        <input type="text" class="form-control" id="qty" placeholder="Masukkan Kuantitas" value="<?= old('qty') ?: $fpb['qty']; ?>" name="qty" required autocomplete="qty">
                        <?php if (session('errors.qty')) : ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?= session('errors.qty') ?></strong>
                        </span>
                    <?php endif ?>
                    </div>
                    <div class="form-group col-4 mr-2 text-center">
                        <label for="note">Note</label>
                        <input type="text" class="form-control" id="note" placeholder="Masukkan Note" value="<?= old('note') ?: $fpb['note']; ?>" name="note" required autocomplete="note">
                        <?php if (session('errors.note')) : ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?= session('errors.note') ?></strong>
                        </span>
                    <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="">
                <button type="button" class="btn btn-outline-success" id="addbtn">Add</button>
                <button type="button" class="btn btn-outline-danger" id="removebtn">Remove</button>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#addbtn").click(function{
                        $(".formbarang .duplicate-row:last-child").clone().appendTo(".formbarang");
                    });
                    $("#removebtn").click(function(
                        if($(".formbarang .duplicate-row").length > 1){
                            $(this).parents(".duplicate-row").remove();
                        }
                    ));
                });
            </script>
        </div>
        <?php
            $sql="UPDATE fpb SET status_fpb='pending'";
            ?>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= route_to('fpb'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>