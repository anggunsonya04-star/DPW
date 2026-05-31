<?php
require_once 'koneksi.php';

if (isset($_GET['idDosen'])) {

    // ambil id dari url
    $id = $_GET['idDosen'];

    // buat objek database
    $db   = new Database();
    $conn = $db->conn;

    // prepared statement untuk DELETE
    $stmt = $conn->prepare(
        "DELETE FROM t_dosen WHERE idDosen = ?"
    );

    // i = integer
    $stmt->bind_param("i", $id);

    // jalankan query
    $stmt->execute();

    // tutup statement
    $stmt->close();
}

// redirect kembali ke viewdosen
header("location:viewdosen.php");
?>