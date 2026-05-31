<?php
require_once 'koneksi.php';

$db   = new Database();
$conn = $db->conn;

// cek apakah ada pencarian
$keyword = $_GET['cari'] ?? '';

if ($keyword !== '') {
    $stmt = $conn->prepare(
        "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ? ORDER BY npm ASC"
    );
    $like = "%" . $keyword . "%";
    $stmt->bind_param("s", $like);
} else {
    $stmt = $conn->prepare(
        "SELECT * FROM t_mahasiswa ORDER BY npm ASC"
    );
}

$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
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
    <div class="page-title">Data Mahasiswa</div>

    <div class="card">
        <div class="action-bar">
            <div class="card-header">Daftar Mahasiswa</div>
            <a href="inputmahasiswa.php" class="btn btn-primary">+ Tambah Mahasiswa</a>
        </div>

        <!-- Form Pencarian -->
        <form method="GET" action="viewmahasiswa.php" class="search-bar">
            <input type="text" name="cari"
                   placeholder="Cari nama mahasiswa..."
                   value="<?= htmlspecialchars($keyword) ?>">
            <button type="submit" class="btn btn-primary">Cari</button>
            <?php if ($keyword !== ''): ?>
                <a href="viewmahasiswa.php" class="btn">Reset</a>
            <?php endif; ?>
        </form>

        <table>
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($data = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $data['npm'] ?></td>
                    <td><?= htmlspecialchars($data['namaMhs']) ?></td>
                    <td><?= htmlspecialchars($data['prodi']) ?></td>
                    <td><?= htmlspecialchars($data['alamat']) ?></td>
                    <td><?= htmlspecialchars($data['noHP']) ?></td>
                    <td>
                        <a href="editmahasiswa.php?npm=<?= $data['npm'] ?>"
                           class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapusmahasiswa.php?npm=<?= $data['npm'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" style="text-align:center;">
                        Tidak ada data mahasiswa.
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>