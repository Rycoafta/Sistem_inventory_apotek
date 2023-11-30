<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Inventory
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12">
                <p class="card-title">Kasir</p>
            </div>
        </div>
    </div>
    <div class="card-body">
    <form method="POST" action="<?= route_to('kasir/tambah'); ?>">
    <?= csrf_field() ?>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="faktur">Faktur</label>
                    <input type="text" class="form-control form-control-sm" value="<?= old('faktur'); ?>" style="color:red;font-weight:bold;"
                        name="faktur" id="faktur">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal" readonly
                        value="<?= date('Y-m-d'); ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="nama_pembeli">Pelanggan</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-sm" value="<?= old('nama_pembeli'); ?>" name="nama_pembeli" id="nama_pembeli">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="tanggal">Aksi</label>
                    <div class="input-group">
                        <a href="<?= route_to('kasir'); ?>" class="btn btn-danger">
                            <i class="fa fa-trash-alt"></i>
                        </a>&nbsp;
                        <button class="btn btn-success" type="submit">
                            <i class="fa fa-save"></i>
                        </button>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="obat">Nama Obat</label>
                    <select class="form-control form-control-sm" value="<?= old('obat'); ?>" name="obat" id="obat">
                    <option selected>Pilih...</option>
                            <?php $i = 1; foreach ($dataobat as $Kasir) : ?>
                            <option><?= $Kasir['nama_obat'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="number" class="form-control form-control-sm" name="qty" id="qty" value="1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="total">Total Bayar</label>
                    <input type="text" class="form-control form-control-lg" name="total" id="total"
                        style="text-align: right; color:blue; font-weight : bold; font-size:30pt;" value="<?= $total['grandtotal']; ?>" readonly>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($kasir as $Kasir) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $Kasir['kode_obat'] ?></td>
                        <td><?= $Kasir['obat'] ?></td>
                        <td><?= $Kasir['qty'] ?></td>
                        <td>Rp. <?= $Kasir['price'] ?></td>
                        <td class="manage-row">
                            <!-- Button trigger modal -->
                            <a href="<?= route_to('kasir/delete', $Kasir['id']) ?>" class="delete-button badge badge-light" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm<?= $Kasir['id'] ?>">
                                <i class="fas fa-trash-alt" style="color: #005eff;"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-sm<?= $Kasir['id'] ?>" tabindex="-1" role="dialog" aria-hidden="">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">Apakah Anda yakin ingin menghapus data?</div>
                                        <div class="modal-footer">
                                            <form action="<?= route_to('kasir/delete', $Kasir['id']) ?>" method="POST">
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
            </table>
            <form method="POST" action="<?= route_to('kasir'); ?>">
            <?= csrf_field() ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bayar">Bayar</label>
                            <input type="number" class="form-control form-control-sm" value="<?= old('bayar') ?: $hitung['bayar']; ?>" name="bayar" id="bayar">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kembali">Kembalian</label>
                            <input type="number" class="form-control form-control-sm" value="<?= $hitung['kembali']; ?>" style="font-weight:bold;" name="kembali" id="kembali" readonly>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success col-md-1" type="submit">Hitung</button>
                <a class="btn btn-secondary col-md-1" href="<?= route_to('kasir/print') ?>">Cetak</a>
                <a href="<?= route_to('kasir/store') ?>" class="btn btn-warning col-md-3">Konfirmasi</a>
            </form>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>