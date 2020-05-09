<div class="container">
    <div class="row mt-3">
        <div class="col md-10">
            <div class="card">
                <div class="card-header text-center">
                    Form Edit Menu
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $menu['id'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama Menu</label>
                            <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="<?= $menu['nama_menu']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <button type="submit" name="editMenu" class="btn btn-primary float-right">Edit Data Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>