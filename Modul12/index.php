<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <a href="index.php" class="navbar-brand">Sistem Informasi</a>
    <a href="viewdosen.php">Data Dosen</a>
    <a href="viewmahasiswa.php">Data Mahasiswa</a>
    <a href="viewmatakuliah.php">Data Matakuliah</a>
</nav>

<div class="page-wrapper">
    <div class="page-title">Beranda</div>

    <?php
    require_once 'koneksi.php';
    $db   = new Database();
    $conn = $db->conn;

    // hitung total dosen
    $stmtDosen = $conn->prepare("SELECT COUNT(*) as total FROM t_dosen");
    $stmtDosen->execute();
    $totalDosen = $stmtDosen->get_result()->fetch_assoc()['total'];
    $stmtDosen->close();

    // hitung total mahasiswa
    $stmtMhs = $conn->prepare("SELECT COUNT(*) as total FROM t_mahasiswa");
    $stmtMhs->execute();
    $totalMhs = $stmtMhs->get_result()->fetch_assoc()['total'];
    $stmtMhs->close();

    // hitung total mata kuliah
    $stmtMK = $conn->prepare("SELECT COUNT(*) as total FROM t_matakuliah");
    $stmtMK->execute();
    $totalMK = $stmtMK->get_result()->fetch_assoc()['total'];
    $stmtMK->close();
    ?>

    <!-- Kartu Statistik -->
    <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:1rem; margin-bottom:1.5rem;">

        <div class="card" style="text-align:center; padding:1.5rem;">
            <div style="font-size:2rem;">👨‍🏫</div>
            <div style="font-size:2rem; font-weight:bold; color:#185FA5; margin:0.5rem 0;">
                <?= $totalDosen ?>
            </div>
            <div style="font-size:14px; color:#555;">Total Dosen</div>
            <a href="viewdosen.php" class="btn btn-primary" 
               style="margin-top:1rem; width:100%;">Kelola Data</a>
        </div>

        <div class="card" style="text-align:center; padding:1.5rem;">
            <div style="font-size:2rem;">🎓</div>
            <div style="font-size:2rem; font-weight:bold; color:#185FA5; margin:0.5rem 0;">
                <?= $totalMhs ?>
            </div>
            <div style="font-size:14px; color:#555;">Total Mahasiswa</div>
            <a href="viewmahasiswa.php" class="btn btn-primary"
               style="margin-top:1rem; width:100%;">Kelola Data</a>
        </div>

        <div class="card" style="text-align:center; padding:1.5rem;">
            <div style="font-size:2rem;">📖</div>
            <div style="font-size:2rem; font-weight:bold; color:#185FA5; margin:0.5rem 0;">
                <?= $totalMK ?>
            </div>
            <div style="font-size:14px; color:#555;">Total Mata Kuliah</div>
            <a href="viewmatakuliah.php" class="btn btn-primary"
               style="margin-top:1rem; width:100%;">Kelola Data</a>
        </div>

    </div>

    <!-- Info Modul -->
    <div class="card">
        <div class="card-header">ℹ️ Tentang Aplikasi</div>
        <table>
            <tr>
                <td style="width:200px; color:#555;">Mata Kuliah</td>
                <td>Pemrograman Web</td>
            </tr>
            <tr>
                <td style="color:#555;">Modul</td>
                <td>Modul 12 — PHP Database OOP</td>
            </tr>
            <tr>
                <td style="color:#555;">Teknologi</td>
                <td>PHP, MySQL, OOP, Prepared Statements</td>
            </tr>
            <tr>
                <td style="color:#555;">Fitur</td>
                <td>CRUD Dosen, Mahasiswa, Mata Kuliah</td>
            </tr>
        </table>
    </div>

</div>

</body>
</html>