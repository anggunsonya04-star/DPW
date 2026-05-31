<?php
require_once 'koneksi.php';

$db   = new Database();
$conn = $db->conn;

if (isset($_GET['kodeMK'])) {
    $kodeMK = $_GET['kodeMK'];

    // prepared statement untuk SELECT data berdasarkan kodeMK
    $stmt = $conn->prepare(
        "SELECT * FROM t_matakuliah WHERE kodeMK = ?"
    );

    // i = integer
    $stmt->bind_param("i", $kodeMK);
    $stmt->execute();
    $result = $stmt->get_result();
    $data   = $result->fetch_assoc();
    $stmt->close();

    // simpan ke variabel
    $kodeMK = $data['kodeMK'];
    $namaMK = $data['namaMK'];
    $sks    = $data['sks'];
    $jam    = $data['jam'];

} else {
    // jika tidak ada kodeMK di url, kembali ke viewmatakuliah
    header("location:viewmatakuliah.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
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
    <div class="page-title">Edit Mata Kuliah</div>

    <div class="card">
        <div class="card-header">Form Edit Mata Kuliah</div>
        <form action="proses_editmatakuliah.php" method="post">

            <div class="form-group">
                <label>Kode MK</label>
                <!-- hidden: kodeMK dikirim ke proses tapi tidak bisa diubah -->
                <input type="hidden" name="kodeMK" value="<?= $kodeMK ?>">
                <!-- disabled: hanya tampilan -->
                <input type="text" value="<?= $kodeMK ?>" disabled>
            </div>

            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" name="namaMK"
                       value="<?= htmlspecialchars($namaMK) ?>">
            </div>

            <div class="form-group">
                <label>SKS</label>
                <input type="number" name="sks"
                       value="<?= $sks ?>">
            </div>

            <div class="form-group">
                <label>Jam</label>
                <input type="number" name="jam"
                       value="<?= $jam ?>">
            </div>

            <input type="submit" name="edit" value="Update Data" class="btn btn-primary">
            <a href="viewmatakuliah.php" class="btn">Batal</a>

        </form>
    </div>
</div>

</body>
</html>