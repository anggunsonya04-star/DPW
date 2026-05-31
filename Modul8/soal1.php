<?php

echo "<title>Soal 1</title>";

// Data gaji Obi
$gaji_pokok = 3250000;
$tunjangan = 1200000;

// Hitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan;

// Hitung pajak (10% dari gaji kotor)
$pajak = 10 / 100 * $gaji_kotor;

// Hitung gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;

// Tampilkan hasil
echo "<p>Gaji Pokok     : Rp. " . number_format($gaji_pokok, 0, ',', '.') . ",-</p>";
echo "<p>Tunjangan      : Rp. " . number_format($tunjangan, 0, ',', '.') . ",-</p>";
echo "<p>Gaji Kotor     : Rp. " . number_format($gaji_kotor, 0, ',', '.') . ",-</p>";
echo "<p>Pajak (10%)    : Rp. " . number_format($pajak, 0, ',', '.') . ",-</p>";
echo "<p><b>Gaji Bersih : Rp. " . number_format($gaji_bersih, 0, ',', '.') . ",-</b></p>";

?>
