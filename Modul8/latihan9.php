<?php

echo "<title>Latihan 9</title>";

//Contoh fungsi
function writeMsg($nama) {
    echo "Selamat Datang ". $nama." <br>";
}
writeMsg("Anggun"); //pemanggilan fungsi

//fungsi dengan mengirim nilai balik
function tambah(int $angka1, int $angka2) {
    $a = $angka1+$angka2;
    return $a; // mengirimkan nilai $a ke pemanggil
}
$hasil = tambah(10, 15);
echo ($hasil);

?>