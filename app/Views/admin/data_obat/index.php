<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Inventory
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header">
    <div class="row">
    <div class="col-lg-12">
        <p class="card-title">Data Obat</p>
        <a class="btn btn-success float-right" href="<?= route_to('data_obat/create') ?>">Tambah</a>
    </div>
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example3" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Keterangan</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($dataobat as $dataObat) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $dataObat['kode_obat'] ?></td>
                    <td><?= $dataObat['nama_obat'] ?></td>
                    <td>Rp.<?= $dataObat['hb_obat'] ?></td>
                    <td>Rp.<?= $dataObat['hj_obat'] ?></td>
                    <td><?= $dataObat['jenis'] ?></td>
            
                    <td class="manage-row">
                        <a href="<?= route_to('data_obat/show', $dataObat['id']) ?>" class="show-button badge badge-light">
                            <i class="fas fa-eye" style="color: #005eff;"></i>
                        </a>
                        <a href="<?= route_to('data_obat/edit', $dataObat['id']) ?>" class="edit-button badge badge-light">
                            <i class="fas fa-edit" style="color: #005eff;"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <a href="<?= route_to('data_obat/delete', $dataObat['id']) ?>" class="delete-button badge badge-light" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm<?= $dataObat['id'] ?>">
                            <i class="fas fa-trash-alt" style="color: #005eff;"></i>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-sm<?= $dataObat['id'] ?>" tabindex="-1" role="dialog" aria-hidden="">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">Apakah Anda yakin ingin menghapus data?</div>
                                    <div class="modal-footer">
                                        <form action="<?= route_to('data_obat/delete', $dataObat['id']) ?>" method="POST">
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
                    <th>Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Keterangan</th>
                    <th>Option</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>