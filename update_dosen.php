<?php 
$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama_dosen'];
$jabatan = $_POST['jabatan'];
$id = $_POST['id'];
include 'koneksi.php';
$data = mysqli_query($link, "UPDATE dosen SET nidn = '$nidn', nama_dosen = '$nama_dosen', jabatan = '$jabatan' where id = '$id'");
//$this->connect->query($data);
header('location:dosen.php');
?>
