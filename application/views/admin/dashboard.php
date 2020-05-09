        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="card" style="width: 18rem">
                                <img src="https://cdn.onlinewebfonts.com/svg/img_546519.png" style="width: 17rem ; height: 18rem">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Dokter</h5>
                                    <div class="panel-body text-center">
                                        <?php $jd = $this->db->query("SELECT COUNT(id) AS jumlah FROM `user_dokter`")->result();
                                        foreach ($jd as $row) {

                                            echo "<h1>$row->jumlah</h1>";
                                        }
                                        ?>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img src="https://images.vexels.com/media/users/3/153835/isolated/preview/172ddc045ae1707a415adeae0543a5f0-patient-colored-stroke-icon-by-vexels.png" style=" width: 18rem">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Pasien</h5>
                                    <div class="panel-body text-center">
                                        <?php $jd = $this->db->query("SELECT COUNT(id) AS jumlah FROM `user_pasien`")->result();
                                        foreach ($jd as $row) {

                                            echo "<h1>$row->jumlah</h1>";
                                        }
                                        ?>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->