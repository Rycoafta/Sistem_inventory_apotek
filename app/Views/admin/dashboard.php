<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Beranda
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
      <h1>10</h1>

        <p>FPP</p>
      </div>
      <div class="icon">
        <i class="fa fa-wrench"></i>
      </div>
      <a href="/fpp" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h1>10</h1>

        <p>FPB</p>
      </div>
      <div class="icon">
        <i class="fa fa-list"></i>
      </div>
      <a href="/fpb" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h1>10</h1>

        <p>USER</p>
      </div>
      <div class="icon">
        <i class="fa-solid fa-envelope"></i>
      </div>
      <a href="/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h1>10</h1>

        <p>INVENTORY</p>
      </div>
      <div class="icon">
        <i class="fa fa-history"></i>
      </div>
      <a href="/alat" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<?= $this->endSection() ?>