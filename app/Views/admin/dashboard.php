<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Beranda
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Small boxes (Stat box) -->
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $dataobat ?></h3>

                <p>Data Obat</p>
              </div>
              <div class="icon">
                <i class="far fa-folder-open"></i>
              </div>
              <a href="/data_obat" class="small-box-footer"><i class="fas fa-plus" style="color: #fff;"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $datamasuk ?></h3>

                <p>Obat Masuk Hari ini</p>
              </div>
              <div class="icon">
                <i class="fas fa-sign-in-alt"></i>
              </div>
              <a href="/data_masuk" class="small-box-footer"><i class="fas fa-plus" style="color: #fff;"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner text-white">
                <h3><?= $laporan ?></h3>

                <p>Penjualan Hari ini</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-alt"></i>
              </div>
              
              <a href="/laporan_penjualan" class="small-box-footer"><i class="fas fa-print" style="color: #fff;"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Rp. <?= $laba ?></h3>

                <p>Nominal Penjualan Hari ini</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-import"></i>
              </div>
              <a href="/kasir" class="small-box-footer"><i class="fas fa-arrow-right" style="color: #fff;"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
    <?php if($masukdata) { ?>
      <div class="card bg-danger">
        <div class="card-header">
        <h3 class="card-title">Terdapat Stok Obat Yang Kadaluarsa</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          Mohon Untuk Segera Periksa! (Abaikan Pesan Ini Jika Tidak Ada Obat Yang Kadaluarsa)
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <?php } ?>
  <div class="card m-3">
    <div class="card-header">
      <div class="row">
        <div class="col-lg-12">
            <p class="card-title">Daftar Kadaluarsa</p>
        </div>
      </div>
    </div>
    <div class="card-body">
    <table id="example3" class="table table-bordered table-striped">
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
            foreach ($masukdata as $masukdata) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $masukdata['kode_transaksi'] ?></td>
                    <td><?= $masukdata['tanggal'] ?></td>
                    <td><?= $masukdata['tanggal_kadaluarsa'] ?></td>
                    <td><?= $masukdata['obat'] ?></td>
                    <td><?= $masukdata['jlh_stok'] ?></td>
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
  </div>
<?= $this->endSection() ?>