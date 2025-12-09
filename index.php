<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ujiann</title>
</head>
<body>

    <button><a href="data.php">Data Siswa</a></button>

     <div>
        <form action="save.php" method="post">

            <label>Nama Lengkap</label>
            <input type="text" autocomplete="off" name="nama_lengkap" required>

            <label>NISN</label>
            <input type="text" autocomplete="off" name="nisn" required>

            <label>Kelas</label>
            <input type="text" name="kelas" required>

            <label>Jurusan</label>
            <select name="jurusan" required>
                <option value="PPLG">PPLG</option>
                <option value="TKJ">TKJ</option>
                <option value="DKV">DKV</option>
                <option value="PEMASARAN">PEMASARAN</option>
                <option value="MPLB">MPLB</option>
            </select>

            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>