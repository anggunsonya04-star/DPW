<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mata Kuliah</title>

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
        <p class="page-title">Input Data Mata Kuliah</p>

        <div class="card">
            <div class="card-header">Form Tambah Mata Kuliah</div>

            <form action="proses_inputmatakuliah.php" method="post">

                <div class="form-group">
                    <label for="kodeMK">Kode Mata Kuliah</label>
                    <input type="number"
                           name="kodeMK"
                           id="kodeMK"
                           placeholder="Masukkan kode mata kuliah"
                           required>
                </div>

                <div class="form-group">
                    <label for="namaMK">Nama Mata Kuliah</label>
                    <input type="text"
                           name="namaMK"
                           id="namaMK"
                           placeholder="Masukkan nama mata kuliah"
                           required>
                </div>

                <div class="form-group">
                    <label for="sks">SKS</label>
                    <input type="number"
                           name="sks"
                           id="sks"
                           placeholder="Contoh: 3"
                           required>
                </div>

                <div class="form-group">
                    <label for="jam">Jam</label>
                    <input type="number"
                           name="jam"
                           id="jam"
                           placeholder="Contoh: 3"
                           required>
                </div>

                <div style="display:flex; gap:8px; margin-top:1rem;">
                    <button type="submit" name="input" class="btn btn-primary">
                        Simpan
                    </button>
                    <a href="viewmatakuliah.php" class="btn">
                        Batal
                    </a>
                </div>

            </form>
        </div>
    </div>

</body>
</html>