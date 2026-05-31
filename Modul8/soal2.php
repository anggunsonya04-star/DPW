<?php

echo "<title>Soal 2</title>";

// Total uang yang akan diambil
$uang = 1387500;

// Daftar pecahan yang tersedia (dari terbesar ke terkecil)
$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

echo "<p>Total uang: Rp1.387.500,-</p>";
echo "<hr>";

// Hitung jumlah lembar tiap pecahan
foreach ($pecahan as $p) {
    $lembar = (int)($uang / $p);
    $uang = $uang % $p;
    echo "<p>Rp" . number_format($p, 0, ',', '.') . ",- = " . $lembar . " lembar</p>";
}

?>