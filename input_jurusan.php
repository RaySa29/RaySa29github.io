<?php
require_once 'class/database.php';
require_once 'class/proses.php';
$tambah = new proses();
if(isset($_POST['submit'])) {
    $nama_jurusan = $_POST['nama_jurusan'];
    $fakultas = $_POST['fakultas'];
    $tambah->tambah_data_jurusan($nama_jurusan,$fakultas);
    header('location:jurusan.php');
}
?>