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
                <h3>700</h3>

                <p>Data Obat</p>
              </div>
              <div class="icon">
                <i class="far fa-folder-open"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa-plus" style="color: #fff;"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>10</h3>

                <p>Data Obat Masuk</p>
              </div>
              <div class="icon">
                <i class="fas fa-sign-in-alt"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa-plus" style="color: #fff;"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner text-white">
                <h3>700</h3>

                <p>Laporan</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-alt"></i>
              </div>
              
              <a href="#" class="small-box-footer"><i class="fas fa-print" style="color: #fff;"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>10</h3>

                <p>Laporan Obat Masuk</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-import"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa-print" style="color: #fff;"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
<?= $this->endSection() ?>