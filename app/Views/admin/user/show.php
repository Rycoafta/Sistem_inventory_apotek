<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
DETAIL AKUN
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header" >
        <div class="row">
            <div class="col-lg-12">
                <p class="card-title">Informasi Akun</p>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
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
        <div class="card-footer">
            <a href="<?= route_to('user'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
    <!-- /.card-body -->
    
</div>
<?= $this->endSection() ?>