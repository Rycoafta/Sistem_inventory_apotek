<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
TAMBAH AKUN
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">TAMBAH AKUN</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('user/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Masukkan Username" value="<?= old('username'); ?>" name="username" required autocomplete="username">
                <?php if (session('errors.username')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.username') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" placeholder="Masukkan email" value="<?= old('email'); ?>" name="email" required autocomplete="email">
                <?php if (session('errors.email')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.email') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" value="<?= old('password'); ?>" name="password" required autocomplete="password">
                <?php if (session('errors.password')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.password') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control <?= session('errors.role') ? 'is-invalid' : ''; ?>" id="role" name="role" required autocomplete="role">
                    <option value="" selected>Select Role</option>
                    <option value="1">Admin</option>
                    <option value="2">General Manager</option>
                    <option value="3">Manager</option>
                    <option value="4">Supervisor</option>
                    <option value="5">General Manager Business & Development</option>
                    <option value="6">Manager Business & Development</option>
                    <option value="7">Supervisor Business & Development</option>
                    <option value="8">Staff Warehouse</option>
                    <option value="9">Staff</option>

                    <!-- Add more options as needed -->
                </select>
                <?php if (session('errors.role')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.role') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            
            <div class="">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
        </div>
        <!-- /.card-body -->
    </form>
</div>
<?= $this->endSection() ?>