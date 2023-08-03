<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
FPP
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">FPP</h3>
        <div class="card-tools">
            <a href="<?= route_to('fpp/create') ?>" class="btn btn-sm btn-secondary">Pengajuan Pembelian</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Ref</th>
                    <th>Status</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($fpps as $fpp) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $fpp['tanggal'] ?></td>
                        <td><?= $fpp['nama_pelanggan'] ?></td>
                        <td><?= $fpp['ref'] ?></td>
                        <?php if(session()->get('role')== 8) { ?>
                            <td><?= $fpp['status_fpp'] ?></td>
                        <?php } ?>
                        <?php if(session()->get('role')== 7) { ?>
                            <?php if($fpp['status_fpp'] == "Pending") { ?>
                                <td>
                                    <div class="text-center">
                                        <label>Setuju</label>
                                        <a href="<?= route_to('fpp/status', $fpp['id']) ?>"><button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                                        <label>Revisi</label>
                                        <a href="<?= route_to('fpp/revisi', $fpp['id']) ?>"><button type="button" class="btn btn-warning"><i class="fa fa-file-text-o"></i></button></a>
                                        <label>Tolak</label>
                                        <a href="<?= route_to('fpp/reject', $fpp['id']) ?>"><button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                                    </div>
                                </td>
                            <?php } else { ?>
                                <td><?= $fpp['status_fpp'] ?></td>
                            <?php } ?>
                        <?php } ?>
                        <?php if(session()->get('role')== 6) { ?>
                            <?php if($fpp['status_fpp'] == "Disetujui Supervisor Business & Development") { ?>
                                <td>
                                    <div class="text-center">
                                        <label>Setuju</label>
                                        <a href="<?= route_to('fpp/status', $fpp['id']) ?>"><button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                                        <label>Revisi</label>
                                        <a href="<?= route_to('fpp/revisi', $fpp['id']) ?>"><button type="button" class="btn btn-warning"><i class="fa fa-file-text-o"></i></button></a>
                                        <label>Tolak</label>
                                        <a href="<?= route_to('fpp/reject', $fpp['id']) ?>"><button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                                    </div>
                                </td>
                            <?php } else { ?>
                                <td><?= $fpp['status_fpp'] ?></td>
                            <?php } ?>
                        <?php } ?>
                        <?php if(session()->get('role')== 5) { ?>
                            <?php if($fpp['status_fpp'] == "Disetujui Manager Business & Development") { ?>
                                <td>
                                    <div class="text-center">
                                        <label>Setuju</label>
                                        <a href="<?= route_to('fpp/status', $fpp['id']) ?>"><button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                                        <label>Revisi</label>
                                        <a href="<?= route_to('fpp/revisi', $fpp['id']) ?>"><button type="button" class="btn btn-warning"><i class="fa fa-file-text-o"></i></button></a>
                                        <label>Tolak</label>
                                        <a href="<?= route_to('fpp/reject', $fpp['id']) ?>"><button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                                    </div>
                                </td>
                            <?php } else { ?>
                                <td><?= $fpp['status_fpp'] ?></td>
                            <?php } ?>
                        <?php } ?>
                        <td class="manage-row">
                            <a href="<?= route_to('fpp/show', $fpp['id']) ?>" class="show-button">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="<?= route_to('fpp/edit', $fpp['id']) ?>" class="edit-button">
                                <i class="fa-solid fa-marker"></i>
                            </a>
                            <!-- Button trigger modal -->
                            <a href="<?= route_to('fpp/delete', $fpp['id']) ?>" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm<?= $fpp['id'] ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-sm<?= $fpp['id'] ?>" tabindex="-1" role="dialog" aria-hidden="">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">Apakah Anda yakin ingin menghapus data?</div>
                                        <div class="modal-footer">
                                            <form action="<?= route_to('fpp/delete', $fpp['id']) ?>" method="POST">
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
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Ref</th>
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