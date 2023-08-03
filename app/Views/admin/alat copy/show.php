<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
DETAIL AKUN
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">DETAIL AKUN</h3>
    </div>
    <!-- /.card-header -->
    <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" value="<?= $user['username']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" value="<?= $user['email']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" value="<?= $user['password']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" id="role" value="<?= old('role') ?: $user['role']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('user'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>