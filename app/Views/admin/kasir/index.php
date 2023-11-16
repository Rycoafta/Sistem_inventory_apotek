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
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example3" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($kasir as $Kasir) : ?>
                <tr>
                    <td><?= $Kasir['kode_obat'] ?></td>
                    <td><?= $Kasir['nama_obat'] ?></td>
                    <td><?= $Kasir['jenis'] ?></td>
                    <td>Rp.<?= $Kasir['hj_obat'] ?></td>
                    <td>
                        <div class="container">
                            <div class="row">
                                <a class="badge badge-light" href=""><i class="fas fa-cart-plus" style="color: #005eff;"></i></a>
                            </div>
                        </div>
                    </td>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
            <tfoot>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <table id="example3" class="table table-bordered table-striped">
        <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Beli</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
        </thead>
    </table>
    <div class="card-body">
        <form method="POST" action="<?= route_to('kasir/store'); ?>">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="exampleInputPassword1">Total</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Rp." readonly>
            </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Bayar</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Rp.">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Kembali</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Rp." readonly>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success mb-2">Konfirmasi</button>
                <a href="<?= route_to('kasir'); ?>" class="btn btn-danger mb-2">Batal</a>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>