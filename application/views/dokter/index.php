        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

        </div>
        <!-- /.container-fluid -->
        <div class="row mt-5">
            <div class="col">
                <?php if (empty($dokter)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data tidak ditemukan
                    </div>
                <?php endif; ?>
                <?= $this->session->flashdata('message'); ?>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Dokter Klinik THT Tel-U</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Dokter</th>
                                        <th>Jam Praktek</th>
                                        <th>Member Since</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><?php foreach ($dokter as $d) : ?>
                                            <td class="text-center"><?= $d['nama_dokter']; ?></td>
                                            <td class="text-center"><?= $d['jam_praktek']; ?></td>
                                            <td class="text-center"><?= date('d F Y', $d['date_created']) ?></td>
                                            <td class="text-center"><?= $d['username']; ?></td>
                                            <td class="text-center"><?= $d['password']; ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>dokter/deleteDokter/<?= $d['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Are you sure you want to delete?');">delete</a>
                                            </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="row mt-3">
                                <div class="col md-6 text-center mt-3">
                                    <a href="<?= base_url(); ?>dokter/add" class="btn btn-primary">Tambah Data Dokter</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End of Main Content -->