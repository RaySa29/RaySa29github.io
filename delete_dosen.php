<?php
include 'koneksi.php';
$id = $_GET ['id'];
$hapus = mysqli_query($link,"delete from dosen where id = '$id' ");
header('location:dosen.php');