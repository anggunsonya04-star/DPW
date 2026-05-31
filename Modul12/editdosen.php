<?php
require_once 'koneksi.php';

$db   = new Database();
$conn = $db->conn;

if (isset($_GET['idDosen'])) {
    $id = $_GET['idDosen'];

    // prepared statement untuk SELECT data berdasarkan id
    $stmt = $conn->prepare(
        "SELECT * FROM t_dosen WHERE idDosen = ?"
    );

    // i = integer
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data   = $result->fetch_assoc();
    $stmt->close();

    // simpan ke variabel
    $idDosen   = $data['idDosen'];
    $namaDosen = $data['namaDosen'];
    $noHP      = $data['noHP'];

} else {
    // jika tidak ada id di url, kembali ke viewdosen
    header("location:viewdosen.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dosen</title>
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
    <div class="page-title">Edit Data Dosen</div>

    <div class="card">
        <div class="card-header">Form Edit Dosen</div>
        <form action="proses_editdosen.php" method="post">

            <div class="form-group">
                <label>ID Dosen</label>
                <!-- hidden: id dikirim ke proses tapi tidak bisa diubah user -->
                <input type="hidden" name="idDosen" value="<?= $idDosen ?>">
                <!-- disabled: hanya tampilan, tidak bisa diedit -->
                <input type="text" value="<?= $idDosen ?>" disabled>
            </div>

            <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" name="namaDosen" 
                       value="<?= htmlspecialchars($namaDosen) ?>">
            </div>

            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="noHP" 
                       value="<?= htmlspecialchars($noHP) ?>">
            </div>

            <input type="submit" name="edit" value="Update Data" class="btn btn-primary">
            <a href="viewdosen.php" class="btn">Batal</a>

        </form>
    </div>
</div>

</body>
</html>