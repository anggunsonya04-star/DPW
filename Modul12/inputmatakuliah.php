<!DOCTYPE html>
<html>
<head>
    <title>Input Mata Kuliah</title>
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
    <div class="page-title">Input Mata Kuliah</div>

    <div class="card">
        <div class="card-header">Form Input Mata Kuliah</div>
        <form action="proses_inputmatakuliah.php" method="post">

            <div class="form-group">
                <label>Kode MK</label>
                <input type="number" name="kodeMK"
                       placeholder="Masukkan kode mata kuliah">
            </div>

            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" name="namaMK"
                       placeholder="Masukkan nama mata kuliah">
            </div>

            <div class="form-group">
                <label>SKS</label>
                <input type="number" name="sks"
                       placeholder="Contoh: 3">
            </div>

            <div class="form-group">
                <label>Jam</label>
                <input type="number" name="jam"
                       placeholder="Contoh: 3">
            </div>

            <input type="submit" name="input" value="Simpan" class="btn btn-primary">
            <a href="viewmatakuliah.php" class="btn">Batal</a>

        </form>
    </div>
</div>

</body>
</html>