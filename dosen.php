<?php
include 'core/init.php';
$db = new proses();
include 'template/header.php';
include 'template/sidebar.php';
include 'template/navbar.php';
?>
<div class="container">
  <a href="tambah_dosen.php" class="btn btn-primary mb-3">Tambah Data</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nidn</th>
        <th scope="col">Nama</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
    $no = 1;
    foreach ($db->tampil_data_dosen() as $dosen){
    ?>
      <tr>
        <th scope="row"><?php echo $no++;?></th>
        <td><?php echo $dosen['nidn'];?></td>
        <td><?php echo $dosen['nama_dosen'];?></td>
        <td><?php echo $dosen['jabatan'];?></td>
        <td><a href="edit_dosen.php?id=<?php echo $dosen['id'];?>" class="btn btn-warning mb-3">Edit Data</a>
          <a href="delete_dosen.php?id=<?php echo $dosen['id'];?>" class="btn btn-danger mb-3">Hapus Data</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php
include 'template/footer.php'
?>