<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> <?= $nama ?>
            </h3>
        </div>
        <div class="row">
            <div class="col-lg grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">
                            <?= $nama ?>
                        </h4>
                        <form action="" method="POST" class="forms-sample">
                            <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" autocomplete="off" value="<?= $mahasiswa['nama'] ?>">
                                <div class="form-text text-danger"><?= form_error('nama') ?></div>
                            </div>
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP" autocomplete="off" value="<?= $mahasiswa['nrp'] ?>">
                                <div class="form-text text-danger"><?= form_error('nrp') ?></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" value="<?= $mahasiswa['email'] ?>">
                                <div class="form-text text-danger"><?= form_error('email') ?></div>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                                    <option>Open this select menu</option>
                                    <?php foreach ($jurusan as $data) : ?>
                                        <?php if ($data == $mahasiswa['jurusan']) : ?>
                                            <option value="<?= $data ?>" selected><?= $data ?></option>
                                        <?php else : ?>
                                            <option value="<?= $data ?>"><?= $data ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-gradient-primary me-2">Edit</button>
                                <a href="<?= base_url() ?>" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Input Data -->
    <!-- content-wrapper ends -->