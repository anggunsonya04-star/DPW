<?php
require_once 'koneksi.php';

if (isset($_POST['edit'])) {

    // ambil data dari form
    $idDosen   = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    // buat objek database
    $db   = new Database();
    $conn = $db->conn;

    // prepared statement untuk UPDATE
    $stmt = $conn->prepare(
        "UPDATE t_dosen SET namaDosen = ?, noHP = ? WHERE idDosen = ?"
    );

    // ss = string, string | i = integer
    $stmt->bind_param("ssi", $namaDosen, $noHP, $idDosen);

    // jalankan query
    $stmt->execute();

    // tutup statement
    $stmt->close();
}

// redirect kembali ke viewdosen
header("location:viewdosen.php");
?>