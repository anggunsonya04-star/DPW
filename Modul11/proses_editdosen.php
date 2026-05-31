<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {

    // memanggil file koneksi.php untuk membuat koneksi
    include 'koneksi.php';

    // menampung data yang dikirim dari form edit
    $id        = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    // buat dan jalankan query UPDATE
    $query  = "UPDATE t_dosen 
               SET namaDosen = '$namaDosen', 
                   noHP = '$noHP' 
               WHERE idDosen = '$id'";
    $result = mysqli_query($link, $query);

    // periksa hasil query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // redirect ke halaman viewdosen.php setelah berhasil update
    header("location:viewdosen.php");
    exit();

} else {
    // jika tidak ada data POST, redirect ke viewdosen.php
    header("location:viewdosen.php");
    exit();
}
?>