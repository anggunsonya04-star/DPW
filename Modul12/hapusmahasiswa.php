<?php
require_once 'koneksi.php';

if (isset($_GET['npm'])) {

    // ambil npm dari url
    $npm = $_GET['npm'];

    // buat objek database
    $db   = new Database();
    $conn = $db->conn;

    // prepared statement untuk DELETE
    $stmt = $conn->prepare(
        "DELETE FROM t_mahasiswa WHERE npm = ?"
    );

    // i = integer
    $stmt->bind_param("i", $npm);

    // jalankan query
    $stmt->execute();

    // tutup statement
    $stmt->close();
}

// redirect kembali ke viewmahasiswa
header("location:viewmahasiswa.php");
?>