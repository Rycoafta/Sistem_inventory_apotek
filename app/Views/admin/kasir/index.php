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
            foreach ($dataobat as $dataObat) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $dataObat['kode_obat'] ?></td>
                    <td><?= $dataObat['nama_obat'] ?></td>
                    <td>Rp.<?= $dataObat['jenis'] ?></td>
                    <td>Rp.<?= $dataObat['hj_obat'] ?></td>
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

    <form>
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
                    <button type="submit" class="btn btn-primary mb-2">Konfirmasi</button>
                    <button type="submit" class="btn btn-danger mb-2">Batal</button>
                </div>
              </form>
              </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>