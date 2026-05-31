<?php
require_once 'koneksi.php';

if (isset($_POST['edit'])) {

    // ambil data dari form
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    // buat objek database
    $db   = new Database();
    $conn = $db->conn;

    // prepared statement untuk UPDATE
    $stmt = $conn->prepare(
        "UPDATE t_matakuliah SET namaMK = ?, sks = ?, jam = ? 
         WHERE kodeMK = ?"
    );

    // s=string, i=integer, i=integer, i=integer
    $stmt->bind_param("siii", $namaMK, $sks, $jam, $kodeMK);

    // jalankan query
    $stmt->execute();

    // tutup statement
    $stmt->close();
}

// redirect kembali ke viewmatakuliah
header("location:viewmatakuliah.php");
?>