<?php
require_once 'koneksi.php';

$db   = new Database();
$conn = $db->conn;

// cek apakah ada pencarian
$keyword = $_GET['cari'] ?? '';

if ($keyword !== '') {
    $stmt = $conn->prepare(
        "SELECT * FROM t_matakuliah WHERE namaMK LIKE ? ORDER BY kodeMK ASC"
    );
    $like = "%" . $keyword . "%";
    $stmt->bind_param("s", $like);
} else {
    $stmt = $conn->prepare(
        "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC"
    );
}

$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
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
    <div class="page-title">Data Mata Kuliah</div>

    <div class="card">
        <div class="action-bar">
            <div class="card-header">Daftar Mata Kuliah</div>
            <a href="inputmatakuliah.php" class="btn btn-primary">+ Tambah Mata Kuliah</a>
        </div>

        <!-- Form Pencarian -->
        <form method="GET" action="viewmatakuliah.php" class="search-bar">
            <input type="text" name="cari"
                   placeholder="Cari nama mata kuliah..."
                   value="<?= htmlspecialchars($keyword) ?>">
            <button type="submit" class="btn btn-primary">Cari</button>
            <?php if ($keyword !== ''): ?>
                <a href="viewmatakuliah.php" class="btn">Reset</a>
            <?php endif; ?>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Kode MK</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Jam</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($data = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $data['kodeMK'] ?></td>
                    <td><?= htmlspecialchars($data['namaMK']) ?></td>
                    <td><?= $data['sks'] ?></td>
                    <td><?= $data['jam'] ?></td>
                    <td>
                        <a href="editmatakuliah.php?kodeMK=<?= $data['kodeMK'] ?>"
                           class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapusmatakuliah.php?kodeMK=<?= $data['kodeMK'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align:center;">
                        Tidak ada data mata kuliah.
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>