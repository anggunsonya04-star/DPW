<!DOCTYPE html>
<html>
<head>
    <title>Input Data Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <a href="viewdosen.php" class="navbar-brand">Sistem Informasi</a>
        <a href="viewdosen.php">Data Dosen</a>
        <a href="viewmahasiswa.php">Data Mahasiswa</a>
        <a href="viewmatakuliah.php">Data Matakuliah</a>
    </nav>

    <div class="page-wrapper">
        <div class="page-title">Input Data Dosen</div>
        <div class="card">
            <div class="card-header">Form Input Dosen</div>
            <form action="proses_inputdosen.php" method="post">
                <div class="form-group">
                    <label>Nama Dosen</label>
                    <input type="text" name="namaDosen" placeholder="Masukkan nama dosen">
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="noHP" placeholder="Contoh: 081222333444">
                </div>
                <input type="submit" name="input" value="Simpan" class="btn btn-primary">
                <a href="viewdosen.php" class="btn">Batal</a>
            </form>
        </div>
    </div>

</body>
</html>