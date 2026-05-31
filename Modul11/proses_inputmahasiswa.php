<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol simpan dari form telah diklik
if (isset($_POST['input'])) {

    // menampung data yang dikirim dari form
    $npm      = $_POST['npm'];
    $namaMhs  = $_POST['namaMhs'];
    $prodi    = $_POST['prodi'];
    $alamat   = $_POST['alamat'];
    $noHP     = $_POST['noHP'];

    // jalankan query INSERT untuk menyimpan data
    $query  = "INSERT INTO t_mahasiswa VALUES 
               ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHP')";
    $result = mysqli_query($link, $query);

    // periksa apakah query berhasil
    if (!$result) {
        die("Query gagal: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // redirect ke halaman viewmahasiswa setelah berhasil simpan
    header("location:viewmahasiswa.php");
    exit();
}
?>