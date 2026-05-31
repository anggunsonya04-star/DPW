<?php

require_once('kelas/Manusia.php');

// =============================================
// DATA ANDI (dari contoh modul)
// =============================================
$andi = new Manusia();
$andi->setNama("Andi Pratama");
$andi->setUmur(20);

// =============================================
// DATA BUDI (dari contoh modul)
// =============================================
$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(21);

// =============================================
// DATA SAYA (identitas mahasiswa)
// =============================================
$saya = new Manusia();
$saya->setNama("Anggun Sonya Meylani"); // Ganti dengan nama Anda
$saya->setUmur(19);                     // Ganti dengan umur Anda

echo "<h2>== Data Andi ==</h2>";
echo "Nama  : " . $andi->getNama() . "<br>";
echo "Umur  : " . $andi->getUmur() . " tahun<br>";
echo $andi->getNIK() . "<br>";

echo "<hr>";

// Menampilkan nama lengkap $budi
echo "<h2>== Data Budi ==</h2>";
echo "Nama  : " . $budi->getNama() . "<br>";
echo "Umur  : " . $budi->getUmur() . " tahun<br>";
echo $budi->getNIK() . "<br>";

echo "<hr>";

// Menampilkan identitas saya
echo "<h2>== Identitas Saya ==</h2>";
echo "Nama  : " . $saya->getNama() . "<br>";
echo "Umur  : " . $saya->getUmur() . " tahun<br>";
echo $saya->getNIK() . "<br>";

echo "<hr>";

// =============================================
// KESIMPULAN
// =============================================
echo "<h2>== Kesimpulan ==</h2>";
echo "<p>
    Dari praktikum PHP OOP - Classes dan Objects ini dapat disimpulkan bahwa 
    OOP (Object Oriented Programming) adalah konsep pemrograman yang mengorganisir 
    kode ke dalam bentuk <b>class</b> dan <b>object</b>. Class berperan sebagai 
    cetak biru (blueprint), sedangkan object adalah hasil instansiasi dari class tersebut.<br><br>

    Setiap class dapat memiliki <b>properti</b> (variabel) dan <b>method</b> (fungsi). 
    Akses terhadap properti dan method dikendalikan melalui <b>access modifier</b>, 
    yaitu <code>public</code> (dapat diakses dari mana saja), <code>protected</code> 
    (hanya bisa diakses dari dalam class dan turunannya), serta <code>private</code> 
    (hanya bisa diakses dari dalam class itu sendiri).<br><br>

    Untuk mengakses properti yang bersifat protected atau private secara aman, 
    digunakan konsep <b>getter</b> dan <b>setter</b>. Getter berfungsi untuk membaca 
    nilai properti, sedangkan setter berfungsi untuk mengubah nilainya. 
    Konsep ini merupakan bagian dari <b>enkapsulasi</b>, yaitu salah satu prinsip 
    utama OOP yang bertujuan melindungi data dari akses langsung luar class.<br><br>

    Secara keseluruhan, penggunaan OOP membuat kode menjadi lebih terstruktur, 
    mudah dikelola, dan dapat digunakan kembali (reusable).
</p>";