<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
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
    <div class="page-title">Input Data Mahasiswa</div>

    <div class="card">
        <div class="card-header">Form Input Mahasiswa</div>
        <form action="proses_inputmahasiswa.php" method="post">

            <div class="form-group">
                <label>NPM</label>
                <input type="number" name="npm" 
                       placeholder="Masukkan NPM mahasiswa">
            </div>

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="namaMhs" 
                       placeholder="Masukkan nama mahasiswa">
            </div>

            <div class="form-group">
                <label>Program Studi</label>
                <input type="text" name="prodi" 
                       placeholder="Contoh: Teknik Informatika">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" 
                       placeholder="Masukkan alamat">
            </div>

            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="noHP" 
                       placeholder="Contoh: 081222333444">
            </div>

            <input type="submit" name="input" value="Simpan" class="btn btn-primary">
            <a href="viewmahasiswa.php" class="btn">Batal</a>

        </form>
    </div>
</div>

</body>
</html>