<?php 
$nama_jurusan = $_POST['nama_jurusan'];
$fakultas = $_POST['fakultas'];
$id = $_POST['id'];
include 'koneksi.php';
$data = mysqli_query($link, "UPDATE jurusan SET nama_jurusan = '$nama_jurusan', fakultas = '$fakultas' where id = '$id'");
//$this->connect->query($data);
header('location:jurusan.php');
?>
