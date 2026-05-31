<?php
include 'koneksi.php';

// Hitung total masing-masing data
$resDosen   = mysqli_query($link, "SELECT COUNT(*) AS total FROM t_dosen");
$totalDosen = $resDosen ? mysqli_fetch_assoc($resDosen)['total'] : 0;

$resMhs     = mysqli_query($link, "SELECT COUNT(*) AS total FROM t_mahasiswa");
$totalMhs   = $resMhs ? mysqli_fetch_assoc($resMhs)['total'] : 0;

$resMK      = mysqli_query($link, "SELECT COUNT(*) AS total FROM t_matakuliah");
$totalMK    = $resMK ? mysqli_fetch_assoc($resMK)['total'] : 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik — Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="index.php" class="navbar-brand">🎓 Sistem Akademik</a>
        <a href="viewdosen.php">Dosen</a>
        <a href="viewmahasiswa.php">Mahasiswa</a>
        <a href="viewmatakuliah.php">Mata Kuliah</a>
    </nav>

    <!-- KONTEN -->
    <div class="page-wrapper">

        <p class="page-title">🏠 Beranda</p>

        <!-- RINGKASAN DATA -->
        <div class="card">
            <div class="card-header">📊 Ringkasan Data</div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Data</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>👨‍🏫 Data Dosen</td>
                        <td><?= $totalDosen ?> data</td>
                        <td>
                            <a href="viewdosen.php" class="btn btn-primary btn-sm">Kelola</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>👨‍🎓 Data Mahasiswa</td>
                        <td><?= $totalMhs ?> data</td>
                        <td>
                            <a href="viewmahasiswa.php" class="btn btn-primary btn-sm">Kelola</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>📚 Data Mata Kuliah</td>
                        <td><?= $totalMK ?> data</td>
                        <td>
                            <a href="viewmatakuliah.php" class="btn btn-primary btn-sm">Kelola</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- MENU CEPAT -->
        <div class="card">
            <div class="card-header">🚀 Aksi Cepat</div>
            <a href="inputdosen.php" class="btn btn-primary">+ Tambah Dosen</a>
            &nbsp;
            <a href="inputmahasiswa.php" class="btn btn-primary">+ Tambah Mahasiswa</a>
            &nbsp;
            <a href="inputmatakuliah.php" class="btn btn-primary">+ Tambah Mata Kuliah</a>
        </div>

    </div><!-- end .page-wrapper -->

</body>
</html>