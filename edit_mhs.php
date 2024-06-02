<?php
include 'core/init.php';
$db = new proses();
$mhs1=$db->edit_data_mahasiswa();
include 'template/header.php';
include 'template/sidebar.php';
include 'template/navbar.php';

//$id=$_GET['id'];
?>

<div class="container d-flex justify-content-center">
    <div class="card" style="width: 36rem;">
        <h5 class="card-header bg-primary text-white">Edit Data</h5>
        <div class="card-body">
            <form method="POST" action="update_mhs.php">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nim</label>
                    <div class="col-sm-8">
                        <input type="hidden" name="id" value="<?php echo $mhs1['id']; ?>">
                        <input type="text" class="form-control" name="nim" value="<?php echo $mhs1['nim']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" value="<?php echo $mhs1['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Jurusan</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="jurusan">
                            <option value=""><?php echo $mhs1['jurusan']; ?></option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Elektro">Manajemen</option>
                            <option value="Pertanian">Pertanian</option>
                        </select>
                    </div>
                    <div class="col-sm-12 d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-primary mt-4">Update Data</button>
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