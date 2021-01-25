<?php
include 'lib/library.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO siswa (nis,nama_lengkap,jenis_kelamin,kelas,jurusan) VALUES ('$nis','$nama_lengkap','$jenis_kelamin','$kelas','$jurusan')";

    $mysqli->query($sql) or die($mysqli->error);

    header("location:index.php");
}

include 'views/v_tambah.php';
