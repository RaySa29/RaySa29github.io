<?php
require_once 'class/database.php';
require_once 'class/proses.php';
$tambah = new proses();
if(isset($_POST['submit'])) {
    $nama_matakuliah = $_POST['nama_matakuliah'];
    $sks = $_POST['sks'];
    $tambah->tambah_data_matakuliah($nama_matakuliah,$sks);
    header('location:matakuliah.php');
}
?>