<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Obat Masuk
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header">
    <div class="row">
    <div class="col-lg-12">
        <p class="card-title">Laporan Obat Masuk</p>
    </div>
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Kadaluarsa</th>
                <th>Nama Obat</th>
                <th>Pembaruan Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($datamasuk as $datamasuk) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $datamasuk['kode_transaksi'] ?></td>
                    <td><?= $datamasuk['tanggal'] ?></td>
                    <td><?= $datamasuk['tanggal_kadaluarsa'] ?></td>
                    <td><?= $datamasuk['obat'] ?></td>
                    <td><?= $datamasuk['jlh_stok'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode Transaksi</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Kadaluarsa</th>
                    <th>Nama Obat</th>
                    <th>Pembaruan Stok</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>