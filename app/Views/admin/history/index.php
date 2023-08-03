<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
HISTORY
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">HISTORY</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="fpb" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">FPB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fpp
                    
                    " data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">FPP</a>
                </li>
            </ul>
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="fpb">
                    <!-- form start -->
                    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Barang</th>
                    <th>Ref./WO/Tanggal</th>
                    <th>Lokasi Penempatan</th>
                    <th>Status</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($historys2 as $history) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $history['nama_peminjam'] ?></td>
                        <td><?= $history['nama_barang'] ?></td>
                        <td><?= $history['ref'] ?></td>
                        <td><?= $history['lokasi_penempatan'] ?></td>
                        <td><?= $history['status_fpb'] ?></td>
                        <td class="manage-row">
                            <a href="<?= route_to('history/show', $history['id']) ?>" class="show-button">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Nama/Jenis</th>
                    <th>Ref./WO/Tanggal</th>
                    <th>Lokasi Penempatan</th>
                    <th>Status</th>
                    <th>Option</th>
                </tr>
            </tfoot>
        </table>
    </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="fpp">
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="fpb">
                        <!-- form start -->
                        <div class="card-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Status</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($historys1 as $history) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $history['nama_pelanggan'] ?></td>
                        <td><?= $history['status_fpp'] ?></p></td>
                        <td class="manage-row">
                            <a href="<?= route_to('history/show2', $history['id']) ?>" class="show-button">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Status</th>
                    <th>Option</th>
                </tr>
            </tfoot>
        </table>
    </div>
                    </div>
                </div>

                <!-- /.card-body -->
                
            </div>
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
            "autoWidth": true,
            "buttons": ["csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": ["csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
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