<?php
include 'core/init.php';
include 'template/header.php';
include 'template/sidebar.php';
include 'template/navbar.php';
?>

<div class="container d-flex justify-content-center">
    <div class="card" style="width: 36rem;">
        <h5 class="card-header bg-primary text-white">Tambah Data</h5>
        <div class="card-body">
            <form method="POST" action="input_dosen.php">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nidn</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nidn">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_dosen">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Jabatan</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="jabatan">
                    </div>
                    <div class="col-sm-12 d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-primary mt-4">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<?php
include 'template/footer.php';
?>