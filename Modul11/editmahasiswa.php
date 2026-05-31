<?php
// memanggil file koneksi.php
include 'koneksi.php';

// mengecek apakah di url ada nilai GET npm
if (isset($_GET['npm'])) {

    // ambil nilai npm dari url
    $npm = $_GET['npm'];

    // ambil data mahasiswa berdasarkan npm
    $query  = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link, $query);

    // cek apakah query berhasil
    if (!$result) {
        die("Query Error: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // ambil data dan simpan ke variabel
    $data    = mysqli_fetch_assoc($result);
    $npm     = $data['npm'];
    $namaMhs = $data['namaMhs'];
    $prodi   = $data['prodi'];
    $alamat  = $data['alamat'];
    $noHP    = $data['noHP'];

} else {
    // jika tidak ada npm di url, redirect
    header("location:viewmahasiswa.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>

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
        <p class="page-title">Edit Data Mahasiswa</p>

        <div class="card">
            <div class="card-header">Form Edit Mahasiswa</div>

            <form action="proses_editmahasiswa.php" method="post">

                <!-- NPM (hidden) -->
                <input type="hidden" 
                       name="npm" 
                       value="<?php echo $npm; ?>">

                <div class="form-group">
                    <label>NPM</label>
                    <input type="text"
                           value="<?php echo $npm; ?>"
                           disabled>
                </div>

                <div class="form-group">
                    <label for="namaMhs">Nama Mahasiswa</label>
                    <input type="text"
                           name="namaMhs"
                           id="namaMhs"
                           value="<?php echo $namaMhs; ?>"
                           required>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    <input type="text"
                           name="prodi"
                           id="prodi"
                           value="<?php echo $prodi; ?>"
                           required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text"
                           name="alamat"
                           id="alamat"
                           value="<?php echo $alamat; ?>"
                           required>
                </div>

                <div class="form-group">
                    <label for="noHP">No HP</label>
                    <input type="text"
                           name="noHP"
                           id="noHP"
                           value="<?php echo $noHP; ?>"
                           required>
                </div>

                <div style="display:flex; gap:8px; margin-top:1rem;">
                    <button type="submit" name="edit" class="btn btn-primary">
                        Update Data
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