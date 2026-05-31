<?php
require_once 'koneksi.php';

if (isset($_POST['input'])) {

    // ambil data dari form
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    // buat objek database
    $db   = new Database();
    $conn = $db->conn;

    // prepared statement — tanda ? sebagai placeholder
    $stmt = $conn->prepare(
        "INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)"
    );

    // bind_param — ss artinya dua parameter bertipe string
    $stmt->bind_param("ss", $namaDosen, $noHP);

    // jalankan query
    $stmt->execute();

    // tutup statement
    $stmt->close();
}

// redirect ke halaman viewdosen
header("location:viewdosen.php");
?>