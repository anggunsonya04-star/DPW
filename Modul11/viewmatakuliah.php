<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mata Kuliah</title>

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
        <p class="page-title">Tabel Mata Kuliah</p>

        <div class="card">

            <!-- ACTION BAR: SEARCH + TOMBOL TAMBAH -->
            <div class="action-bar">
                <form action="viewmatakuliah.php" method="get"
                      style="display:flex; gap:8px;">
                    <div class="search-bar" style="margin:0;">
                        <input type="text"
                               name="keyword"
                               placeholder="Cari nama mata kuliah..."
                               value="<?php echo isset($_GET['keyword']) ?
                                      $_GET['keyword'] : ''; ?>">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Cari
                        </button>
                        <?php if(isset($_GET['keyword']) && 
                                 $_GET['keyword'] != ''): ?>
                            <a href="viewmatakuliah.php" class="btn btn-sm">
                                Reset
                            </a>
                        <?php endif; ?>
                    </div>
                </form>
                <a href="inputmatakuliah.php" class="btn btn-primary btn-sm">
                    + Tambah Mata Kuliah
                </a>
            </div>

            <!-- TABEL DATA MATA KULIAH -->
            <table>
                <thead>
                    <tr>
                        <th>Kode MK</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Jam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    // cek apakah ada keyword pencarian
                    if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
                        $keyword = $_GET['keyword'];
                        $query   = "SELECT * FROM t_matakuliah 
                                    WHERE namaMK LIKE '%$keyword%' 
                                    ORDER BY kodeMK ASC";
                    } else {
                        $query   = "SELECT * FROM t_matakuliah 
                                    ORDER BY kodeMK ASC";
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
                                <td colspan='5'
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
                                    <td>" . $data['kodeMK'] . "</td>
                                    <td>" . $data['namaMK'] . "</td>
                                    <td>" . $data['sks'] . " SKS</td>
                                    <td>" . $data['jam'] . " Jam</td>
                                    <td style='display:flex; gap:6px;'>
                                        <a href='editmatakuliah.php?kodeMK="
                                            . $data['kodeMK'] . "'
                                           class='btn btn-warning btn-sm'>
                                            Edit
                                        </a>
                                        <a href='hapusmatakuliah.php?kodeMK="
                                            . $data['kodeMK'] . "'
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