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
            <div class="small-box bg-success">
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
            <div class="small-box bg-warning">
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
            <div class="small-box bg-danger">
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
<?= $this->endSection() ?>