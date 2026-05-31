<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>

    <!-- KONEKSI KE FILE CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="viewdosen.php" class="navbar-brand">🎓 Sistem Akademik</a>
        <a href="viewdosen.php">Dosen</a>
        <a href="viewmahasiswa.php">Mahasiswa</a>
        <a href="viewmatakuliah.php">Mata Kuliah</a>
    </nav>

    <!-- KONTEN -->
    <div class="page-wrapper">
        <p class="page-title">Input Data Mahasiswa</p>

        <div class="card">
            <div class="card-header">Form Tambah Mahasiswa</div>

            <form action="proses_inputmahasiswa.php" method="post">

                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="number"
                           name="npm"
                           id="npm"
                           placeholder="Masukkan NPM mahasiswa"
                           required>
                </div>

                <div class="form-group">
                    <label for="namaMhs">Nama Mahasiswa</label>
                    <input type="text"
                           name="namaMhs"
                           id="namaMhs"
                           placeholder="Masukkan nama mahasiswa"
                           required>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    <input type="text"
                           name="prodi"
                           id="prodi"
                           placeholder="Contoh: Teknik Informatika"
                           required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text"
                           name="alamat"
                           id="alamat"
                           placeholder="Masukkan alamat mahasiswa"
                           required>
                </div>

                <div class="form-group">
                    <label for="noHP">No HP</label>
                    <input type="text"
                           name="noHP"
                           id="noHP"
                           placeholder="Contoh: 081222333444"
                           required>
                </div>

                <div style="display:flex; gap:8px; margin-top:1rem;">
                    <button type="submit" name="input" class="btn btn-primary">
                        Simpan
                    </button>
                    <a href="viewmahasiswa.php" class="btn">
                        Batal
                    </a>
                </div>

            </form>
        </div>
    </div>

</body>
</html>