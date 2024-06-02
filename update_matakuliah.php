<?php 
$nama_matakuliah = $_POST['nama_matakuliah'];
$sks = $_POST['sks'];
$id = $_POST['id'];
include 'koneksi.php';
$data = mysqli_query($link, "UPDATE matakuliah SET nama_matakuliah = '$nama_matakuliah', sks = '$sks' where id = '$id'");
//$this->connect->query($data);
header('location:matakuliah.php');
?>
