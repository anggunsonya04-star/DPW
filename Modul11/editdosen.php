<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// mengecek apakah di url ada nilai GET idDosen
if (isset($_GET['idDosen'])) {

    // ambil nilai idDosen dari url
    $id = $_GET['idDosen'];

    // menampilkan data t_dosen yang mempunyai idDosen=$id
    $query  = "SELECT * FROM t_dosen WHERE idDosen='$id'";
    $result = mysqli_query($link, $query);

    // cek apakah query gagal
    if (!$result) {
        die("Query Error: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // mengambil data dari database dan membuat
    // variabel-variabel untuk menampilkan data pada form
    $data      = mysqli_fetch_assoc($result);
    $idDosen   = $data['idDosen'];
    $namaDosen = $data['namaDosen'];
    $noHP      = $data['noHP'];

} else {
    // apabila tidak ada data GET id, redirect ke viewdosen.php
    header("location:viewdosen.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>

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
        <p class="page-title">Edit Data Dosen</p>

        <div class="card">
            <div class="card-header">Form Edit Dosen</div>

            <form action="proses_editdosen.php" method="post">

                <!-- ID DOSEN (hidden, tidak terlihat user) -->
                <input type="hidden" 
                       name="idDosen" 
                       value="<?php echo $idDosen; ?>">

                <div class="form-group">
                    <label for="idDosenDisabled">ID Dosen</label>
                    <input type="text" 
                           id="idDosenDisabled"
                           value="<?php echo $idDosen; ?>"
                           disabled>
                </div>

                <div class="form-group">
                    <label for="namaDosen">Nama Dosen</label>
                    <input type="text" 
                           name="namaDosen" 
                           id="namaDosen"
                           value="<?php echo $namaDosen; ?>"
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
                    <a href="viewdosen.php" class="btn">
                        Batal
                    </a>
                </div>

            </form>
        </div>
    </div>

</body>
</html>