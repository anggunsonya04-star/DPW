<?php

require_once('kelas/akunBank.php');

// =============================================
// BUAT OBJEK AKUN BANK
// =============================================
$data1 = new akunBank(nomorAkun: "001", nominal: 10000);
$data1->setNama("Andi Pratama");

$data2 = new akunBank(nomorAkun: "002", nominal: 10000);
$data2->setNama("Budi Santoso");

// =============================================
// TAMPILKAN DATA AKUN 1
// =============================================
echo "<h2>== Akun: " . $data1->getNama() . " (No. " . $data1->getAccountNumber() . ") ==</h2>";
$data1->tampilUang();
$data1->tambahUang(50000);
$data1->tampilUang();
$data1->kurangUang(20000);
$data1->tampilUang();
$data1->hitungPajak();

echo "<hr>";

// =============================================
// TAMPILKAN DATA AKUN 2
// =============================================
echo "<h2>== Akun: " . $data2->getNama() . " (No. " . $data2->getAccountNumber() . ") ==</h2>";
$data2->tampilUang();
$data2->tambahUang(100000);
$data2->tampilUang();
$data2->kurangUang(200000); // Sengaja melebihi saldo untuk uji validasi
$data2->tampilUang();
$data2->hitungPajak();