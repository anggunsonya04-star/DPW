<?php

echo "<title>Konversi Nilai</title>";
echo "<h3>Konversi Nilai</h3>";

// Tentukan nilai yang ingin dikonversi
$nilai = 85;

// Konversi nilai angka ke huruf menggunakan if-elseif-else
if ($nilai >= 90 && $nilai <= 100) {
    $huruf = "A";
} elseif ($nilai >= 80 && $nilai < 90) {
    $huruf = "AB";
} elseif ($nilai >= 70 && $nilai < 80) {
    $huruf = "B";
} elseif ($nilai >= 60 && $nilai < 70) {
    $huruf = "BC";
} elseif ($nilai >= 0 && $nilai < 60) {
    $huruf = "C";
} else {
    $huruf = "Nilai tidak valid";
}

echo "<p>Nilai angka: " . $nilai . "</p>";
echo "<p>Nilai huruf: " . $huruf . "</p>";

?>