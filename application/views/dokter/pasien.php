        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

        </div>
        <!-- /.container-fluid -->
        <div class="row mt-5">
            <div class="col">
                <?php if (empty($pasien)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data tidak ditemukan
                    </div>
                <?php endif; ?>
                <?= $this->session->flashdata('message'); ?>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pasien Klinik THT Tel-U</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Pasien</th>
                                        <th>Member Since</th>
                                        <th>Reserved On</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><?php foreach ($pasien as $p) : ?>
                                            <td class="text-center"><?= $p['nama_pasien']; ?></td>
                                            <td class="text-center"><?= date('D, d F Y', $p['date_created']) ?></td>
                                            <td class="text-center"><?= date('D, d F Y', $p['date_reserved']) ?></td>
                                            <td class="text-center"><?= $p['username']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End of Main Content -->