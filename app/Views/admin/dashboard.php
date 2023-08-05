<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Beranda
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
  <div class="col-lg-6 col-12">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $fpb?></h3>
        <p>FPB</p>
      </div>
      <div class="icon">
        <i class="fa fa-wrench"></i>
      </div>
      <a href="/fpb" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-6 col-12">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?= $fpp?></h3>
        <p>FPP</p>
      </div>
      <div class="icon">
        <i class="fa fa-list"></i>
      </div>
      <a href="/fpp" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  </div>
  </div>
  <!-- ./col -->
</div>
<?= $this->endSection() ?>