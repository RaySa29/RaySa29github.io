<?php
include 'koneksi.php';
$id = $_GET ['id'];
$hapus = mysqli_query($link,"delete from mahasiswa where id = '$id' ");
header('location:mhs.php');