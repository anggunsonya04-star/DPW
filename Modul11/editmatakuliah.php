<?php
// memanggil file koneksi.php
include 'koneksi.php';

// mengecek apakah di url ada nilai GET kodeMK
if (isset($_GET['kodeMK'])) {

    // ambil nilai kodeMK dari url
    $kodeMK = $_GET['kodeMK'];

    // ambil data matakuliah berdasarkan kodeMK
    $query  = "SELECT * FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    $result = mysqli_query($link, $query);

    // cek apakah query berhasil
    if (!$result) {
        die("Query Error: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // ambil data dan simpan ke variabel
    $data   = mysqli_fetch_assoc($result);
    $kodeMK = $data['kodeMK'];
    $namaMK = $data['namaMK'];
    $sks    = $data['sks'];
    $jam    = $data['jam'];

} else {
    // jika tidak ada kodeMK di url, redirect
    header("location:viewmatakuliah.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mata Kuliah</title>

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
        <p class="page-title">Edit Data Mata Kuliah</p>

        <div class="card">
            <div class="card-header">Form Edit Mata Kuliah</div>

            <form action="proses_editmatakuliah.php" method="post">

                <!-- KODE MK (hidden) -->
                <input type="hidden"
                       name="kodeMK"
                       value="<?php echo $kodeMK; ?>">

                <div class="form-group">
                    <label>Kode Mata Kuliah</label>
                    <input type="text"
                           value="<?php echo $kodeMK; ?>"
                           disabled>
                </div>

                <div class="form-group">
                    <label for="namaMK">Nama Mata Kuliah</label>
                    <input type="text"
                           name="namaMK"
                           id="namaMK"
                           value="<?php echo $namaMK; ?>"
                           required>
                </div>

                <div class="form-group">
                    <label for="sks">SKS</label>
                    <input type="number"
                           name="sks"
                           id="sks"
                           value="<?php echo $sks; ?>"
                           required>
                </div>

                <div class="form-group">
                    <label for="jam">Jam</label>
                    <input type="number"
                           name="jam"
                           id="jam"
                           value="<?php echo $jam; ?>"
                           required>
                </div>

                <div style="display:flex; gap:8px; margin-top:1rem;">
                    <button type="submit" name="edit" class="btn btn-primary">
                        Update Data
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