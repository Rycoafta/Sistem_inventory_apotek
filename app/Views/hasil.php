<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?>
Hasil Diagnosa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header bg-gray pt-3 px-4">
        <h4 class="mx-4"><a class="text-white pr-3" href="<?= route_to('diagnosis') ?>"><i class="fa fa-arrow-left fa-sm" aria-hidden="true"></i></a>Hasil Diagnosis</h4>
    </div>
    <div class="card-body">
        <div class="m-2">
            <h4 class="text-center mb-3">Berdasarkan gejala terpilih, berikut hasil analisis kerusakan laptop anda dengan merk <?= $merk_laptop ?>, tipe <?= $tipe_laptop ?></h4>
            <hr>
            <div class="d-flex justify-content-between">
                <div class="d-flex mx-4 flex-column">
                    <h5><b>Jenis Kerusakan</b></h5>
                    <ol>
                        <li><?= $namaKerusakan ?></li>
                    </ol>
                </div>
                <div class="d-flex mx-4 flex-column">
                    <h5><b>Tingkat Keyakinan</b></h5>
                    <p class="text-center"><?= $maxValue ?>%</p>
                </div>
            </div>
        </div>
        <div class="m-2">
            <div class="d-flex justify-content-between">
                <div class="d-flex mx-4 flex-column">
                    <h5><b>Gejala Kerusakan</b></h5>
                    <ol>
                        <?php foreach ($gejalas as $gejala) : ?>
                            <li><?= $gejala['nama_gejala'] ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 flex-column">
                    <h5><b>Penjelasan:</b><small> Berdasarkan Gejala yang Anda sebutkan, seperti <?php foreach ($gejalas as $gejala) : ?>
                            <?= $gejala['nama_gejala'] ?>,
                        <?php endforeach; ?> menunjukkan bahwa masalah terletak pada <?= $namaKerusakan ?> komputer.</small></h5>
                </div>
            </div>
        </div>
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 flex-column">
                    <h5><b>Solusi:</b></h5>
                    <ol>
                        <?php foreach ($solusis[0] as $solusi) : ?>
                            <li><?= $solusi['nama_solusi'] ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
