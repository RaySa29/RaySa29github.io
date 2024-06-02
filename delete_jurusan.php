<?php
include 'koneksi.php';
$id = $_GET ['id'];
$hapus = mysqli_query($link,"delete from jurusan where id = '$id' ");
header('location:jurusan.php');