<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <?php foreach ($dokter as $d) : ?>
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $d['image']; ?>" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $d['nama_dokter']; ?></h5>
                        <p class="card-text"><?= $d['jam_praktek']; ?></p>
                        <p class="card-text"><small class="text-muted">Member since <?= date('D, d F Y', $d['date_created']) ?></small></p>
                        <a href="<?php echo base_url('Pasien/reserveDokter/' . $d['id']) ?>" class="btn btn-primary">Buat Janji</a>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>