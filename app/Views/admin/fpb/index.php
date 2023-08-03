<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Data Permintaan Barang
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel List Permintaan</h3>
        <div class="card-tools">
            <a href="<?= route_to('fpb/create') ?>" class="btn btn-sm btn-secondary">Pengajuan Permintaan</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Barang || Nama Barang</th>
                    <th>Ref./WO/Tanggal</th>
                    <th>Status</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($fpbs as $fpb) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $fpb['nama_barang'] ?></td>
                        <td><?= $fpb['ref'] ?></td>
                        <?php if(session()->get('role')== 9) { ?>
                            <td><?= $fpb['status_fpb'] ?></td>
                        <?php } ?>
                        <?php if(session()->get('role')== 4) { ?>
                            <?php if($fpb['status_fpb'] == "Pending") { ?>
                                <td>
                                    <div class="text-center">
                                        <label>Setuju</label>
                                        <a href="<?= route_to('fpb/status', $fpb['id']) ?>"><button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                                        <label>Revisi</label>
                                        <a href="<?= route_to('fpb/revisi', $fpb['id']) ?>"><button type="button" class="btn btn-warning"><i class="fa fa-file-text-o"></i></button></a>
                                        <label>Tolak</label>
                                        <a href="<?= route_to('fpb/reject', $fpb['id']) ?>"><button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                                    </div>
                                </td>
                            <?php } else { ?>
                                <td><?= $fpb['status_fpb'] ?></td>
                            <?php } ?>
                        <?php } ?>
                        <?php if(session()->get('role')== 3) { ?>
                            <?php if($fpb['status_fpb'] == "Disetujui Supervisor") { ?>
                                <td>
                                    <div class="text-center">
                                        <label>Setuju</label>
                                        <a href="<?= route_to('fpb/status', $fpb['id']) ?>"><button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                                        <label>Revisi</label>
                                        <a href="<?= route_to('fpb/revisi', $fpb['id']) ?>"><button type="button" class="btn btn-warning"><i class="fa fa-file-text-o"></i></button></a>
                                        <label>Tolak</label>
                                        <a href="<?= route_to('fpb/reject', $fpb['id']) ?>"><button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                                    </div>
                                </td>
                            <?php } else { ?>
                                <td><?= $fpb['status_fpb'] ?></td>
                            <?php } ?>
                        <?php } ?>
                        <?php if(session()->get('role')== 2) { ?>
                            <?php if($fpb['status_fpb'] == "Disetujui Manager") { ?>
                                <td>
                                    <div class="text-center">
                                        <label>Setuju</label>
                                        <a href="<?= route_to('fpb/status', $fpb['id']) ?>"><button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                                        <label>Revisi</label>
                                        <a href="<?= route_to('fpb/revisi', $fpb['id']) ?>"><button type="button" class="btn btn-warning"><i class="fa fa-file-text-o"></i></button></a>
                                        <label>Tolak</label>
                                        <a href="<?= route_to('fpb/reject', $fpb['id']) ?>"><button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                                    </div>
                                </td>
                            <?php } else { ?>
                                <td><?= $fpb['status_fpb'] ?></td>
                            <?php } ?>
                        <?php } ?>
                        <td><?= $fpb['status_fpb'] ?></td>
                        <td class="manage-row">
                            <a href="<?= route_to('fpb/show', $fpb['id']) ?>" class="show-button">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <?php if(session()->get('role')== 4) { ?>
                            <a href="<?= route_to('fpb/edit', $fpb['id']) ?>" class="check-button">
                                <i class="fa-solid fa-check"></i>
                            </a>
                            <?php } ?>
                            <?php if(session()->get('role')== 3) { ?>
                            <a href="<?= route_to('fpb/edit', $fpb['id']) ?>" class="check-button">
                                <i class="fa-solid fa-check"></i>
                            </a>
                            <?php } ?>
                            <?php if(session()->get('role')== 2) { ?>
                            <a href="<?= route_to('fpb/edit', $fpb['id']) ?>" class="check-button">
                                <i class="fa-solid fa-check"></i>
                            </a>
                            <?php } ?>
                            <!-- Button trigger modal -->
                            <a href="<?= route_to('fpb/delete', $fpb['id']) ?>" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm<?= $fpb['id'] ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-sm<?= $fpb['id'] ?>" tabindex="-1" role="dialog" aria-hidden="">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">Apakah Anda yakin ingin menghapus data?</div>
                                        <div class="modal-footer">
                                            <form action="<?= route_to('fpb/delete', $fpb['id']) ?>" method="POST">
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
                    <th>ID Barang || Nama Barang</th>
                    <th>Ref./WO/Tanggal</th>
                    <th>Status</th>
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