<?php
require_once 'koneksi.php';

if (isset($_POST['edit'])) {

    // ambil data dari form
    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    // buat objek database
    $db   = new Database();
    $conn = $db->conn;

    // prepared statement untuk UPDATE
    $stmt = $conn->prepare(
        "UPDATE t_mahasiswa SET namaMhs = ?, prodi = ?, alamat = ?, noHP = ? 
         WHERE npm = ?"
    );

    // s=string, s=string, s=string, s=string, i=integer
    $stmt->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHP, $npm);

    // jalankan query
    $stmt->execute();

    // tutup statement
    $stmt->close();
}

// redirect kembali ke viewmahasiswa
header("location:viewmahasiswa.php");
?>