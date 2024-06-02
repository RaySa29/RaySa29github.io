<?php
include 'core/init.php';
$db = new proses();
include 'template/header.php';
include 'template/sidebar.php';
include 'template/navbar.php';
?>
<div class="container">
  <a href="tambah_jurusan.php" class="btn btn-primary mb-3">Tambah Data</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Jurusan</th>
        <th scope="col">Fakultas</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
    $no = 1;
    foreach ($db->tampil_data_jurusan() as $jurusan){
    ?>
      <tr>
        <th scope="row"><?php echo $no++;?></th>
        <td><?php echo $jurusan['nama_jurusan'];?></td>
        <td><?php echo $jurusan['fakultas'];?></td>
        <td><a href="edit_jurusan.php?id=<?php echo $jurusan['id'];?>" class="btn btn-warning mb-3">Edit Data</a>
          <a href="delete_jurusan.php?id=<?php echo $jurusan['id'];?>" class="btn btn-danger mb-3">Hapus Data</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php
include 'template/footer.php'
?>