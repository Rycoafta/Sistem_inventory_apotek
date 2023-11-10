<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
USER
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Akun</h3>
        <div class="card-tools">
            <a class="btn btn-success float-right" href="<?= route_to('user/create') ?>">Buat Akun</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example3" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>Role</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['role'] ?></td>
                 
                        <td class="manage-row">
                            <a href="<?= route_to('user/show', $user['id']) ?>" class="show-button badge badge-light">
                                <i class="fas fa-eye" style="color: #005eff;"></i>
                            </a>
                            <a href="<?= route_to('user/edit', $user['id']) ?>" class="edit-button badge badge-light">
                                <i class="fas fa-edit" style="color: #005eff;"></i>
                            </a>
                            <!-- Button trigger modal -->
                            <a href="<?= route_to('user/delete', $user['id']) ?>" class="delete-button badge badge-light" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm<?= $user['id'] ?>">
                                <i class="fas fa-trash-alt" style="color: #005eff;"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-sm<?= $user['id'] ?>" tabindex="-1" role="dialog" aria-hidden="">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">Apakah Anda yakin ingin menghapus data?</div>
                                        <div class="modal-footer">
                                            <form action="<?= route_to('user/delete', $user['id']) ?>" method="POST">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>Role</th>
                    <th>Option</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>