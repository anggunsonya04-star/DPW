<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// mengecek apakah di url ada nilai GET idDosen
if (isset($_GET['idDosen'])) {

    // menyimpan variabel id dari url
    $id = $_GET['idDosen'];

    // jalankan query DELETE untuk menghapus data
    $query       = "DELETE FROM t_dosen WHERE idDosen='$id'";
    $hasil_query = mysqli_query($link, $query);

    // periksa query, apakah ada kesalahan
    if (!$hasil_query) {
        die("Gagal menghapus data: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // melakukan redirect ke halaman viewdosen.php
    header("location:viewdosen.php");
    exit();

} else {
    // jika tidak ada id di url, redirect ke viewdosen.php
    header("location:viewdosen.php");
    exit();
}
?>