<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol simpan dari form telah diklik
if (isset($_POST['input'])) {

    // menampung data yang dikirim dari form
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    // jalankan query INSERT untuk menyimpan data
    $query  = "INSERT INTO t_matakuliah VALUES 
               ('$kodeMK', '$namaMK', '$sks', '$jam')";
    $result = mysqli_query($link, $query);

    // periksa apakah query berhasil
    if (!$result) {
        die("Query gagal: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // redirect ke viewmatakuliah setelah berhasil simpan
    header("location:viewmatakuliah.php");
    exit();
}
?>