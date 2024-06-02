<?php
include 'koneksi.php';
$id = $_GET ['id'];
$hapus = mysqli_query($link,"delete from matakuliah where id = '$id' ");
header('location:matakuliah.php');