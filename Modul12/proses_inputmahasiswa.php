<?php
require_once 'koneksi.php';

if (isset($_POST['input'])) {

    // ambil data dari form
    $npm      = $_POST['npm'];
    $namaMhs  = $_POST['namaMhs'];
    $prodi    = $_POST['prodi'];
    $alamat   = $_POST['alamat'];
    $noHP     = $_POST['noHP'];

    // buat objek database
    $db   = new Database();
    $conn = $db->conn;

    // prepared statement untuk INSERT
    $stmt = $conn->prepare(
        "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) 
         VALUES (?, ?, ?, ?, ?)"
    );

    // i = integer, s = string
    // npm integer, sisanya string
    $stmt->bind_param("issss", $npm, $namaMhs, $prodi, $alamat, $noHP);

    // jalankan query
    $stmt->execute();

    // tutup statement
    $stmt->close();
}

// redirect kembali ke viewmahasiswa
header("location:viewmahasiswa.php");
?>