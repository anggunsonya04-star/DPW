<?php
require_once 'koneksi.php';

if (isset($_POST['input'])) {

    // ambil data dari form
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    // buat objek database
    $db   = new Database();
    $conn = $db->conn;

    // prepared statement untuk INSERT
    $stmt = $conn->prepare(
        "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) 
         VALUES (?, ?, ?, ?)"
    );

    // i=integer, s=string, i=integer, i=integer
    $stmt->bind_param("isii", $kodeMK, $namaMK, $sks, $jam);

    // jalankan query
    $stmt->execute();

    // tutup statement
    $stmt->close();
}

// redirect kembali ke viewmatakuliah
header("location:viewmatakuliah.php");
?>