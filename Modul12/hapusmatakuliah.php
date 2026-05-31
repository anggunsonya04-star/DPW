<?php
require_once 'koneksi.php';

if (isset($_GET['kodeMK'])) {

    // ambil kodeMK dari url
    $kodeMK = $_GET['kodeMK'];

    // buat objek database
    $db   = new Database();
    $conn = $db->conn;

    // prepared statement untuk DELETE
    $stmt = $conn->prepare(
        "DELETE FROM t_matakuliah WHERE kodeMK = ?"
    );

    // i = integer
    $stmt->bind_param("i", $kodeMK);

    // jalankan query
    $stmt->execute();

    // tutup statement
    $stmt->close();
}

// redirect kembali ke viewmatakuliah
header("location:viewmatakuliah.php");
?>