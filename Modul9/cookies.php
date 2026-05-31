<?php

echo "<title>Cookies</title>";
echo "<h2>Menyimpan Identitas</h2>";

// Menyimpan data identitas ke cookie selama 30 hari
if (isset($_POST["simpan"])) {
    setcookie("nama",  $_POST["nama"],  time() + (86400 * 30));
    setcookie("nim",   $_POST["nim"],   time() + (86400 * 30));
    setcookie("email", $_POST["email"], time() + (86400 * 30));
    echo "Data berhasil disimpan ke cookie!<br><br>";
}

// Menghapus cookie
if (isset($_POST["hapus"])) {
    setcookie("nama",  "", time() - 3600);
    setcookie("nim",   "", time() - 3600);
    setcookie("email", "", time() - 3600);
    echo "Cookie berhasil dihapus!<br><br>";
}

// Menampilkan isi cookie jika ada
if (isset($_COOKIE["nama"])) {
    echo "Data dari Cookie:<br>";
    echo "Nama  : " . $_COOKIE["nama"]  . "<br>";
    echo "NIM   : " . $_COOKIE["nim"]   . "<br>";
    echo "Email : " . $_COOKIE["email"] . "<br>";
    echo "<br>";
}

echo "<form method='post'>
    Nama  : <input type='text'  name='nama'  placeholder='Masukkan nama'><br><br>
    NIM   : <input type='text'  name='nim'   placeholder='Masukkan NIM'><br><br>
    Email : <input type='email' name='email' placeholder='Masukkan email'><br><br>
    <input type='submit' name='simpan' value='Simpan Cookie'>
    <input type='submit' name='hapus'  value='Hapus Cookie'>
</form>";
?>