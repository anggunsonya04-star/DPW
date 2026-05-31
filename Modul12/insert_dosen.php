<?php
$con = new mysqli("localhost", "root", "", "db_kampus");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) 
        VALUES (10, 'Rahmat Dwi Prasetya', 'rahmat@example.com')";

if ($con->query($sql) === TRUE) {
    echo "Data dosen berhasil ditambahkan!";
} else {
    echo "Error: " . $con->error;
}

$con->close();
?>