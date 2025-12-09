<?php
include "koneksi.php";

$nama   = $_POST['nama_lengkap'];
$nisn    = $_POST['nisn'];
$jurusan    = $_POST['jurusan'];
$kelas     = $_POST['kelas'];

$sql = "INSERT INTO siswa (nisn, nama_lengkap, jurusan, kelas)
        VALUES ('$nisn', '$nama', '$jurusan', '$kelas')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
