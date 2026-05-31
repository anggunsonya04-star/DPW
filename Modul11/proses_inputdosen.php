<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol simpan dari form telah diklik
if (isset($_POST['input'])) {

    // menampung data yang dikirim dari form
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    // jalankan query INSERT untuk menambah data ke database
    $query  = "INSERT INTO t_dosen VALUES (NULL, '$namaDosen', '$noHP')";
    $result = mysqli_query($link, $query);

    // periksa query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . 
            " - " . mysqli_error($link));
    }

    // redirect ke halaman viewdosen.php setelah berhasil simpan
    header("location:viewdosen.php");
    exit();
}
?>