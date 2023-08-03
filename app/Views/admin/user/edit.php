<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
EDIT AKUN
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">EDIT AKUN</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('user/update', $user['id']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control <?= session('error.username') ? 'is-invalid' : ''; ?>" id="username" value="<?= old('username') ?: $user['username']; ?>" name="username" required autofocus>
                <?php if (session('error.username')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.username') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control <?= session('error.email') ? 'is-invalid' : ''; ?>" id="email" value="<?= old('email') ?: $user['email']; ?>" name="email" required autofocus>
                <?php if (session('error.email')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.email') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="password">Password (ubah jika perlu)</label>
                <input type="text" class="form-control <?= session('error.password') ? 'is-invalid' : ''; ?>" id="password" value="" name="password" autofocus>
                <?php if (session('error.password')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.password') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control <?= session('errors.role') ? 'is-invalid' : ''; ?>" id="role" name="role" required autocomplete="role">
                <option value="<?= old('role') ?: $user['role']; ?>" selected>Select Role</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
                <!-- Add more options as needed -->
                </select>
    <?php if (session('error.role')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.role') ?></strong>
                    </span>
                <?php endif ?>
            </div>
        </div>  
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= route_to('user'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>