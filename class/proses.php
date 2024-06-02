<?php

class proses extends database
{
    public function tampil_data_mahasiswa()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM mahasiswa");
        $row = mysqli_fetch_all($data, MYSQLI_ASSOC);  
        return ($row); 
    }
    public function tampil_data_dosen()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM dosen");
        $row = mysqli_fetch_all($data, MYSQLI_ASSOC);  
        return ($row); 
    }
    public function tampil_data_jurusan()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM jurusan");
        $row = mysqli_fetch_all($data, MYSQLI_ASSOC);  
        return ($row); 
    }
    public function tampil_data_matakuliah()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM matakuliah");
        $row = mysqli_fetch_all($data, MYSQLI_ASSOC);  
        return ($row); 
    }


    public function tambah_data_mahasiswa($nim,$nama,$jurusan)
    {
        $data = "INSERT INTO mahasiswa (nim,nama,jurusan) values ('$nim','$nama','$jurusan')";
        $this->connect->query($data);
    }
    public function tambah_data_dosen($nidn,$nama_dosen,$jabatan)
    {
        $data = "INSERT INTO dosen (nidn,nama_dosen,jabatan) values ('$nidn','$nama_dosen','$jabatan')";
        $this->connect->query($data);
    }
    public function tambah_data_jurusan($nama_jurusan,$fakultas)
    {
        $data = "INSERT INTO jurusan (nama_jurusan, fakultas) values ('$nama_jurusan','$fakultas')";
        $this->connect->query($data);
    }
    public function tambah_data_matakuliah($nama_matakuliah,$sks)
    {
        $data = "INSERT INTO matakuliah (nama_matakuliah, sks) values ('$nama_matakuliah','$sks')";
        $this->connect->query($data);
    }

    public function edit_data_mahasiswa()
    {
        $id = $_GET ['id'];
        $data = mysqli_query($this->connect, "SELECT * FROM mahasiswa where id='$id'");
        $row = mysqli_fetch_assoc($data);
        return ($row);
    }
    public function edit_data_dosen()
    {
        $id = $_GET ['id'];
        $data = mysqli_query($this->connect, "SELECT * FROM dosen where id='$id'");
        $row = mysqli_fetch_assoc($data);
        return ($row);
    }
    public function edit_data_jurusan()
    {
        $id = $_GET ['id'];
        $data = mysqli_query($this->connect, "SELECT * FROM jurusan where id='$id'");
        $row = mysqli_fetch_assoc($data);
        return ($row);
    }
    public function edit_data_matakuliah()
    {
        $id = $_GET ['id'];
        $data = mysqli_query($this->connect, "SELECT * FROM matakuliah where id='$id'");
        $row = mysqli_fetch_assoc($data);
        return ($row);
    }

    public function update_data_mahasiswa()
    {
        $data = "UPDATE  mahasiswa SET nim = '$nim', nama = '$nama', jurusan = '$jurusan' where id = '$id'";
        $this->connect->query($data);
    }
    public function update_data_dosen()
    {
        $data = "UPDATE  dosen SET nidn = '$nidn', nama_dosen = '$nama_dosen', jabatan = '$jabatan' where id = '$id'";
        $this->connect->query($data);
    }
    public function update_data_jurusan()
    {
        $data = "UPDATE  jurusan SET nama_jurusan = '$nama_jurusan', fakultas = '$fakultas' where id = '$id'";
        $this->connect->query($data);
    }
    public function update_data_matakuliah()
    {
        $data = "UPDATE  matakuliah SET nama_matakuliah = '$nama_matakuliah', sks = '$sks' where id = '$id'";
        $this->connect->query($data);
    }
}

