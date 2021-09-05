<?php

require_once 'koneksi.php';

$tanggal = $_POST['tanggal'];
$hari = $_POST['hari'];
$nip = $_POST['nip'];
$guru = $_POST['guru'];
$mapel = $_POST['mapel'];
$siswa = $_POST['siswa'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$status = $_POST['status'];

$result = mysqli_query($conn, "INSERT INTO hasil_absensi(tanggal,hari,nip,nama_guru,mapel,nama_siswa,kelas,jurusan,status_kehadiran) VALUES('$tanggal' , '$hari' , '$nip' ,'$guru' , '$mapel' , '$siswa', '$kelas', '$jurusan' , '$status')");

if (isset($result) > 0) {
    echo "<script>alert('Absen untuk 1 siswa berhasil');
    document.location.href='index.php';
    </script>";
} else {

    echo "<script>alert('Data Gagal Ditambah ');
    document.location.href='index.php';
    </script>";
}