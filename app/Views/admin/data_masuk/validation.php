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
                <label for="status_fpb">Status FPB</label>
                <select class="form-control <?= session('errors.status_fpb') ? 'is-invalid' : ''; ?>" id="status_fpb" name="status_fpb" required autocomplete="status_fpb">
                    <option value="<?= old('status_fpb') ?: $fpb['status_fpb']; ?>" selected>Pilih status...</option>
                    <option value="diterima">Terima</option>
                    <option value="ditolak">Tolak</option>
                    <!-- Add more options as needed -->
                </select>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= route_to('fpb'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>