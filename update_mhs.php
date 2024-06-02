<?php 
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$id = $_POST['id'];
include 'koneksi.php';
$data = mysqli_query($link, "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', jurusan = '$jurusan' where id = '$id'");
//$this->connect->query($data);
header('location:mhs.php');
?>
