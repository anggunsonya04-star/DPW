<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mahasiswa</title>

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
        <p class="page-title">Tabel Mahasiswa</p>

        <div class="card">

            <!-- ACTION BAR: SEARCH + TOMBOL TAMBAH -->
            <div class="action-bar">
                <form action="viewmahasiswa.php" method="get"
                      style="display:flex; gap:8px;">
                    <div class="search-bar" style="margin:0;">
                        <input type="text"
                               name="keyword"
                               placeholder="Cari nama mahasiswa..."
                               value="<?php echo isset($_GET['keyword']) ?
                                      $_GET['keyword'] : ''; ?>">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Cari
                        </button>
                        <?php if(isset($_GET['keyword']) && 
                                 $_GET['keyword'] != ''): ?>
                            <a href="viewmahasiswa.php" class="btn btn-sm">
                                Reset
                            </a>
                        <?php endif; ?>
                    </div>
                </form>
                <a href="inputmahasiswa.php" class="btn btn-primary btn-sm">
                    + Tambah Mahasiswa
                </a>
            </div>

            <!-- TABEL DATA MAHASISWA -->
            <table>
                <thead>
                    <tr>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Program Studi</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    // cek apakah ada keyword pencarian
                    if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
                        $keyword = $_GET['keyword'];
                        $query   = "SELECT * FROM t_mahasiswa 
                                    WHERE namaMhs LIKE '%$keyword%' 
                                    ORDER BY npm ASC";
                    } else {
                        $query   = "SELECT * FROM t_mahasiswa 
                                    ORDER BY npm ASC";
                    }

                    $result = mysqli_query($link, $query);

                    // cek apakah query berhasil
                    if (!$result) {
                        die("Query Error: " . mysqli_errno($link) .
                            " - " . mysqli_error($link));
                    }

                    // cek apakah data kosong
                    if (mysqli_num_rows($result) == 0) {
                        echo "<tr>
                                <td colspan='6' 
                                    style='text-align:center; 
                                           color:#888; 
                                           padding:2rem;'>
                                    Data tidak ditemukan
                                </td>
                              </tr>";
                    } else {
                        // tampilkan data dengan perulangan while
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>" . $data['npm'] . "</td>
                                    <td>" . $data['namaMhs'] . "</td>
                                    <td>" . $data['prodi'] . "</td>
                                    <td>" . $data['alamat'] . "</td>
                                    <td>" . $data['noHP'] . "</td>
                                    <td style='display:flex; gap:6px;'>
                                        <a href='editmahasiswa.php?npm=" 
                                            . $data['npm'] . "' 
                                           class='btn btn-warning btn-sm'>
                                            Edit
                                        </a>
                                        <a href='hapusmahasiswa.php?npm=" 
                                            . $data['npm'] . "' 
                                           class='btn btn-danger btn-sm'
                                           onclick=\"return confirm('Yakin ingin menghapus data ini?')\">
                                            Hapus
                                        </a>
                                    </td>
                                  </tr>";
                        }
                    }
                ?>
                </tbody>
            </table>

        </div>
    </div>

</body>
</html>