<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Obat Masuk
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header">
    <div class="row">
    <div class="col-lg-12">
        <p class="card-title">Laporan Penjualan</p>
    </div>
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Penjualan</th>
                <th>Tanggal Penjualan</th>
                <th>Nama Obat</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Pelanggan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($laporan as $penjualan) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $penjualan['kode_penjualan'] ?></td>
                    <td><?= $penjualan['tanggal'] ?></td>
                    <td><?= $penjualan['name_obat'] ?></td>
                    <td><?= $penjualan['qty'] ?></td>
                    <td><?= $penjualan['harga'] ?></td>
                    <td><?= $penjualan['nama_pembeli'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode Penjualan</th>
                    <th>Tanggal Penjualan</th>
                    <th>Nama Obat</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Pelanggan</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>