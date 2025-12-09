<?php 
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id = $id");
$c = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="ksksk.php" method="POST">
            <input type="hidden" name="id" value="<?= $c['id'] ?>">

            <input type="text" name="nisn" value="<?= $c['nisn'] ?>" required>
            <input type="text" name="nama_lengkap" value="<?= $c['nama_lengkap'] ?>" required>
            <input type="text" name="kelas" value="<?= $c['kelas'] ?>" required>
            <select name="jurusan" value="<?= $c['jurusan'] ?>" required>
                <option value="PPLG">PPLG</option>
                <option value="TKJ">TKJ</option>
                <option value="DKV">DKV</option>
                <option value="PEMASARAN">PEMASARAN</option>
                <option value="MPLB">MPLB</option>
            </select>
            
            <button type="submit">edit</button>
        </form>
</body>
</html>