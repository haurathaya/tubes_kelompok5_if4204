<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Add Data Dokter
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo site_url('Dokter/add') ?>" method="post">
                        <div class="form-group">
                            <label for="nama">NAMA</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="jam_praktek">JAM PRAKTEK</label>
                            <input type="text" class="form-control" id="JAM PRAKTEK" name="jp">
                            <small class="form-text text-danger"><?= form_error('jam_praktek') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="username">USERNAME</label>
                            <input type="text" class="form-control" id="USERNAME" name="usname">
                            <small class="form-text text-danger"><?= form_error('username') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">PASSWORD</label>
                            <input type="text" class="form-control" id="PASSWORD" name="pass">
                            <small class="form-text text-danger"><?= form_error('password') ?>.</small>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>