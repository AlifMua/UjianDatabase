<?php
include "koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM siswa");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Jurusan</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
                <?php while($c = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= $c['nisn'] ?></td>
                    <td><?= $c['nama_lengkap'] ?></td>
                    <td><?= $c['jurusan'] ?></td>
                    <td><?= $c['kelas'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $c['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?= $c['id'] ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
    </table>
</body>
</html>