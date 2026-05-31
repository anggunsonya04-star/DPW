<?php
// memanggil file koneksi.php
include 'koneksi.php';

// mengecek apakah di url ada nilai GET kodeMK
if (isset($_GET['kodeMK'])) {

    // menyimpan variabel kodeMK dari url
    $kodeMK = $_GET['kodeMK'];

    // jalankan query DELETE untuk menghapus data
    $query       = "DELETE FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    $hasil_query = mysqli_query($link, $query);

    // periksa query apakah ada kesalahan
    if (!$hasil_query) {
        die("Gagal menghapus data: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // redirect ke viewmatakuliah setelah berhasil hapus
    header("location:viewmatakuliah.php");
    exit();

} else {
    header("location:viewmatakuliah.php");
    exit();
}
?>