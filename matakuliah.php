<?php
include 'core/init.php';
$db = new proses();
include 'template/header.php';
include 'template/sidebar.php';
include 'template/navbar.php';
?>
<div class="container">
  <a href="tambah_matakuliah.php" class="btn btn-primary mb-3">Tambah Data</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Matakuliah</th>
        <th scope="col">SKS</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
    $no = 1;
    foreach ($db->tampil_data_matakuliah() as $mk){
    ?>
      <tr>
        <th scope="row"><?php echo $no++;?></th>
        <td><?php echo $mk['nama_matakuliah'];?></td>
        <td><?php echo $mk['sks'];?></td>
        <td><a href="edit_matakuliah.php?id=<?php echo $mk['id'];?>" class="btn btn-warning mb-3">Edit Data</a>
          <a href="delete_matakuliah.php?id=<?php echo $mk['id'];?>" class="btn btn-danger mb-3">Hapus Data</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php
include 'template/footer.php'
?>