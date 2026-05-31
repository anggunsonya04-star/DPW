<?php

require_once ('kelas/mahasiswa.php');

// =============================================
// BUAT OBJEK MAHASISWA
// =============================================
$mhs1 = new mahasiswa(nama: "Anggun Sonya Meylzni");   
$mhs1->setNIM("253307038");                  
$mhs1->setKelas("TI-2B");              
$mhs1->setJurusan("Teknologi Informasi");          
$mhs1->setUmur(19);                         

$mhs2 = new mahasiswa(nama: "Habibbah Prima Risqullah");
$mhs2->setNIM("253307031");
$mhs2->setKelas("TI-2B");
$mhs2->setJurusan("Teknologi Informasi");
$mhs2->setUmur(20);

// =============================================
// TAMPILKAN DATA MAHASISWA 1
// =============================================
echo "<h2>== Data Mahasiswa 1 ==</h2>";
echo "Nama    : " . $mhs1->getNama()    . "<br>";
echo "NIM     : " . $mhs1->getNim()     . "<br>";
echo "Kelas   : " . $mhs1->getKelas()   . "<br>";
echo "Jurusan : " . $mhs1->getJurusan() . "<br>";
echo "Umur    : " . $mhs1->getUmur()    . " tahun<br>";
echo $mhs1->getNIK() . "<br>";

echo "<hr>";

// =============================================
// TAMPILKAN DATA MAHASISWA 2
// =============================================
echo "<h2>== Data Mahasiswa 2 ==</h2>";
echo "Nama    : " . $mhs2->getNama()    . "<br>";
echo "NIM     : " . $mhs2->getNim()     . "<br>";
echo "Kelas   : " . $mhs2->getKelas()   . "<br>";
echo "Jurusan : " . $mhs2->getJurusan() . "<br>";
echo "Umur    : " . $mhs2->getUmur()    . " tahun<br>";
echo $mhs2->getNIK() . "<br>";

?>