<?php

echo "<title>Soal 3</title>";

// Data siswa menggunakan array 2 dimensi
$siswa = [
    ["no" => 1, "poin" => 75, "nama" => "Adi" ],
    ["no" => 2, "poin" => 80, "nama" => "Joni" ],
    ["no" => 3, "poin" => 65, "nama" => "Jihan" ],
    ["no" => 4, "poin" => 70, "nama" => "Aya" ],
    ["no" => 5, "poin" => 85, "nama" => "Ita" ],
    ["no" => 6, "poin" => 90, "nama" => "Budi" ],
    ["no" => 7, "poin" => 95, "nama" => "Tini" ],
    ["no" => 8, "poin" => 65, "nama" => "Sari" ],
];

// Tampilkan poin siswa dengan nomor urut 5
echo "<p><b>a) Poin siswa no urut 5:</b></p>";
echo "<p>Nama : " . $siswa[4]['nama'] . "</p>";
echo "<p>Poin : " . $siswa[4]['poin'] . "</p>";

// Tampilkan semua nama siswa yang memiliki poin 90 
echo "<p><b>b) Siswa dengan poin 90:</b></p>";
$found = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 90) {
        echo "<p>" . $s['nama'] . "</p>";
        $found = true;
    }
}
if (!$found) {
    echo "<p>Tidak ada</p>";
}

// Tampilkan semua nama siswa yang memiliki poin 100
echo "<p><b>c) Siswa dengan poin 100:</b></p>";
$found = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 100) {
        echo "<p>" . $s['nama'] . "</p>";
        $found = true;
    }
}
if (!$found) {
    echo "<p>Tidak ada</p>";
}

?>
