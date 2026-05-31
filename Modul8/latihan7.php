<?php

echo "<title>Latihan 7</title>";

$namaBuah = array("Sirsat", "Mangga", "Semangka", "Alpukat", "Jambu", "Anggur");
echo "Saya suka " . $namaBuah[2] . ", " . $namaBuah[3] . "," . " dan " . $namaBuah[5] . ".";
echo "<br>";

// tampilkan Sirsat
echo "Saya suka " . $namaBuah[0] ;
echo "<br>";

// tampilkan Semangka
echo "Saya suka " . $namaBuah[2] ;
echo "<br>";

// tampilkan Alpukat
echo "Saya suka " . $namaBuah[3] ;
echo "<br>";

// tampilkan Jambu
echo "Saya suka " . $namaBuah[4] ;
echo "<br>";

// tampilkan Anggur
echo "Saya suka " . $namaBuah[5] ;
echo "<br>"; 

// array dengan spesifik index
$umur = array("Anggun"=>"19 Tahun", "Wildan"=>"11 Tahun", "Dita"=>"30 Tahun");
$umur['Yoga']= "25 Tahun";
echo "Umur Anggun adalah " . $umur['Anggun'];
echo "<br>"; 

// tampilkan semua umur
foreach ($umur as $nama => $nilai) {
    echo "Umur " . $nama . " adalah " . $nilai . "<br>";
}

?>