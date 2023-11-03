<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Obat Masuk
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header">
    <div class="row">
    <div class="col-lg-12">
        <p class="card-title">Data Obat Masuk</p>
        <a class="btn btn-success float-right" href="<?= route_to('data_masuk/create') ?>">Tambah</a>
    </div>
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kode Transaksi</th>
                <th>Nama Obat</th>
                <th>Jumlah Stok</th>
                <th>Jenis Obat</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($datamasuk as $datamasuk) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $datamasuk['kode_transaksi'] ?></td>
                    <td><?= $datamasuk['obat'] ?></td>
                    <td><?= $datamasuk['jlh_stok'] ?></td>
                    <td><?= $datamasuk['jenis'] ?></td>
            
                    <td class="manage-row">
                        <a href="<?= route_to('data_masuk/show', $datamasuk['id']) ?>" class="show-button badge badge-light">
                            <i class="fas fa-eye" style="color: #005eff;"></i>
                        </a>
                        <a href="<?= route_to('data_masuk/edit', $datamasuk['id']) ?>" class="edit-button badge badge-light">
                            <i class="fas fa-edit" style="color: #005eff;"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <a href="<?= route_to('data_masuk/delete', $datamasuk['id']) ?>" class="delete-button badge badge-light" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm<?= $datamasuk['id'] ?>">
                            <i class="fas fa-trash-alt" style="color: #005eff;"></i>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-sm<?= $datamasuk['id'] ?>" tabindex="-1" role="dialog" aria-hidden="">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">Apakah Anda yakin ingin menghapus data?</div>
                                    <div class="modal-footer">
                                        <form action="<?= route_to('data_masuk/delete', $datamasuk['id']) ?>" method="POST">
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
                    <th>Nomor</th>
                    <th>Kode Transaksi</th>
                    <th>Nama Obat</th>
                    <th>Jumlah Stok</th>
                    <th>Jenis Obat</th>
                    <th>Option</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "buttons": ["csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<?= $this->endSection() ?>