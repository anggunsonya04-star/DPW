<?php

echo "<title>Latihan 8</title>";

// data kelas dengan 2 array dimensi
$array = array(
    "2A" => array("Ayu", "Ayla", "Shafira"),
    "2B" => array("Anggun", "Habibbah", "Nadin")
);

// menampilkan data array
echo "<h3>Semua data array:</h3>";
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br>";

// menampilkan kelas 2A
echo "<h3>Data Kelas 2A:</h3>";
echo "<pre>";
print_r($array['2A']);
echo "</pre>";
echo "<br><br>";

// menampilkan kelas 2B dengan index 0
echo $array['2B'] [0];
echo "<br><br>";

// tampilkan Habibbah
echo $array['2B'] [1];
echo "<br><br>";

// tampilkan Shafira
echo $array['2A'] [2];
echo "<br><br>";

// data kelas bisa ditulis juga dengan
$array_simple = [
    "2A" => ["Ayu", "Ayla", "Shafira"],
    "2B" => ["Anggun", "Habibbah", "Nadin"]
];

?>

