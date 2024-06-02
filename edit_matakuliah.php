<?php
include 'core/init.php';
$db = new proses();
$mk=$db->edit_data_matakuliah();
include 'template/header.php';
include 'template/sidebar.php';
include 'template/navbar.php';

//$id=$_GET['id'];
?>

<div class="container d-flex justify-content-center">
    <div class="card" style="width: 36rem;">
        <h5 class="card-header bg-primary text-white">Edit Data</h5>
        <div class="card-body">
            <form method="POST" action="update_matakuliah.php">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nama Matakuliah</label>
                    <div class="col-sm-8">
                        <input type="hidden" name="id" value="<?php echo $mk['id']; ?>">
                        <input type="text" class="form-control" name="nama_matakuliah" value="<?php echo $mk['nama_matakuliah']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">SKS</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="sks" value="<?php echo $mk['sks']; ?>">
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