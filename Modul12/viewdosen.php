<?php
require_once 'koneksi.php';

$db   = new Database();
$conn = $db->conn;

// prepared statement untuk SELECT semua data
$stmt = $conn->prepare("SELECT * FROM t_dosen ORDER BY idDosen ASC");
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
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
    <div class="page-title">Data Dosen</div>

    <div class="card">
        <div class="action-bar">
            <div class="card-header">Daftar Dosen</div>
            <a href="inputdosen.php" class="btn btn-primary">+ Tambah Dosen</a>
        </div>

        <!-- Form Pencarian -->
        <form method="GET" action="viewdosen.php" class="search-bar">
            <input type="text" name="cari" 
                   placeholder="Cari nama dosen..."
                   value="<?= htmlspecialchars($_GET['cari'] ?? '') ?>">
            <button type="submit" class="btn btn-primary">Cari</button>
            <?php if (isset($_GET['cari']) && $_GET['cari'] !== ''): ?>
                <a href="viewdosen.php" class="btn">Reset</a>
            <?php endif; ?>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Dosen</th>
                    <th>No HP</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // filter pencarian
            $keyword = $_GET['cari'] ?? '';

            if ($keyword !== '') {
                // jika ada keyword, pakai WHERE LIKE dengan prepared statement
                $stmtCari = $conn->prepare(
                    "SELECT * FROM t_dosen WHERE namaDosen LIKE ? ORDER BY idDosen ASC"
                );
                $like = "%" . $keyword . "%";
                $stmtCari->bind_param("s", $like);
                $stmtCari->execute();
                $result = $stmtCari->get_result();
                $stmtCari->close();
            }

            if ($result->num_rows > 0) {
                while ($data = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $data['idDosen']   . "</td>";
                    echo "<td>" . htmlspecialchars($data['namaDosen']) . "</td>";
                    echo "<td>" . htmlspecialchars($data['noHP'])      . "</td>";
                    echo "<td>
                            <a href='editdosen.php?idDosen=" . $data['idDosen'] . "' 
                               class='btn btn-warning btn-sm'>Edit</a>
                            <a href='hapusdosen.php?idDosen=" . $data['idDosen'] . "' 
                               class='btn btn-danger btn-sm'
                               onclick='return confirm(\"Yakin hapus data ini?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='text-align:center;'>
                        Tidak ada data dosen.
                      </td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>