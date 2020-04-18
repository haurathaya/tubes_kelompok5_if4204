<div class="container">
    <div class="row mt-3">
        <div class="col md-10">
            <div class="card">
                <div class="card-header text-center">
                    Form Edit Sub Menu
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $submenu['id'] ?>">
                        <div class="form-group">
                            <label for="judul">Nama Sub Menu</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $submenu['judul']; ?>">
                            <small class="form-text text-danger"><?= form_error('judul') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="menu">Select Menu</label>
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="">Select Menu</option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['nama_menu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
                            <small class="form-text text-danger"><?= form_error('url') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
                            <small class="form-text text-danger"><?= form_error('Icon') ?>.</small>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data Sub Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>