<?php
require_once 'class/database.php';
require_once 'class/proses.php';
$tambah = new proses();
if(isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama_dosen = $_POST['nama_dosen'];
    $jabatan = $_POST['jabatan'];
    $tambah->tambah_data_dosen($nidn,$nama_dosen,$jabatan);
    header('location:dosen.php');
}
?>