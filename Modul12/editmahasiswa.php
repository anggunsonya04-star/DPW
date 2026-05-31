<?php
require_once 'koneksi.php';

$db   = new Database();
$conn = $db->conn;

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];

    // prepared statement untuk SELECT data berdasarkan npm
    $stmt = $conn->prepare(
        "SELECT * FROM t_mahasiswa WHERE npm = ?"
    );

    // i = integer
    $stmt->bind_param("i", $npm);
    $stmt->execute();
    $result = $stmt->get_result();
    $data   = $result->fetch_assoc();
    $stmt->close();

    // simpan ke variabel
    $npm     = $data['npm'];
    $namaMhs = $data['namaMhs'];
    $prodi   = $data['prodi'];
    $alamat  = $data['alamat'];
    $noHP    = $data['noHP'];

} else {
    // jika tidak ada npm di url, kembali ke viewmahasiswa
    header("location:viewmahasiswa.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
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
    <div class="page-title">Edit Data Mahasiswa</div>

    <div class="card">
        <div class="card-header">Form Edit Mahasiswa</div>
        <form action="proses_editmahasiswa.php" method="post">

            <div class="form-group">
                <label>NPM</label>
                <!-- hidden: npm dikirim ke proses tapi tidak bisa diubah user -->
                <input type="hidden" name="npm" value="<?= $npm ?>">
                <!-- disabled: hanya tampilan -->
                <input type="text" value="<?= $npm ?>" disabled>
            </div>

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="namaMhs"
                       value="<?= htmlspecialchars($namaMhs) ?>">
            </div>

            <div class="form-group">
                <label>Program Studi</label>
                <input type="text" name="prodi"
                       value="<?= htmlspecialchars($prodi) ?>">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat"
                       value="<?= htmlspecialchars($alamat) ?>">
            </div>

            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="noHP"
                       value="<?= htmlspecialchars($noHP) ?>">
            </div>

            <input type="submit" name="edit" value="Update Data" class="btn btn-primary">
            <a href="viewmahasiswa.php" class="btn">Batal</a>

        </form>
    </div>
</div>

</body>
</html>