<?php
include "koneksi.php";

$id = $_POST['id'];
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

mysqli_query($conn, "UPDATE siswa SET 
    nisn = '$nisn',
    nama_lengkap = '$nama_lengkap',
    kelas = '$kelas',
    jurusan = '$jurusan'
    WHERE id = $id
");

header("Location: data.php");
exit;
?>