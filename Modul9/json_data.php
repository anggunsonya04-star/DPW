<?php

echo "<title>JSON</title>";
// Array dengan index nama dan umur, minimal 15 data
$mahasiswa = [
    ["nama" => "Habibbah Prima Risqullah",      "umur" => 20],
    ["nama" => "Cindy Eka Ramadani",            "umur" => 19],
    ["nama" => "Alfi Mariani",                  "umur" => 20],
    ["nama" => "Fikka Dwy Ayu Nur Mutoharoh",   "umur" => 20],
    ["nama" => "Nadin",                         "umur" => 20],
    ["nama" => "Aulia Raya December",           "umur" => 20],
    ["nama" => "Rhenanda Nayla Putri",          "umur" => 20],
    ["nama" => "Anggun Sonya Meylani",          "umur" => 19],
    ["nama" => "Hayyu Adhini Wahida",           "umur" => 19],
    ["nama" => "Nadhin Ayudya Ramadhani",       "umur" => 20],
    ["nama" => "Widya Ony Yusnita Rahayu",      "umur" => 19],
    ["nama" => "Aurellia Zabrina Putri",        "umur" => 21],
    ["nama" => "Ficko Daniar",                  "umur" => 21],
    ["nama" => "David Satrio Wibowo",           "umur" => 10],
    ["nama" => "Bagus Dananjaya",               "umur" => 21],
];

// Konversi array ke JSON
$json = json_encode($mahasiswa, JSON_PRETTY_PRINT);

// Tampilkan hasil JSON
echo "<h3>Array PHP:</h3>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>No</th><th>Nama</th><th>Umur</th></tr>";
foreach ($mahasiswa as $i => $mhs) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $mhs["nama"] . "</td>";
    echo "<td>" . $mhs["umur"] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h3>Hasil JSON:</h3>";
echo "<pre>" . $json . "</pre>";
?>