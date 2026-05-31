<?php

class buah
{
    public $nama;
    protected $warna;
    private $berat;

    // Getter dan Setter untuk $warna (protected)
    public function getWarna()
    {
        return $this->warna;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    // Getter dan Setter untuk $berat (private)
    public function getBerat()
    {
        return $this->berat;
    }

    public function setBerat($berat)
    {
        $this->berat = $berat;
    }
}

$mango = new buah();
$mango->nama = 'Mango';
$mango->setWarna('Yellow'); // Diperbaiki: gunakan setter karena $warna bersifat protected
$mango->setBerat('300');    // Diperbaiki: gunakan setter karena $berat bersifat private

echo "Nama  : " . $mango->nama          . "<br>";
echo "Warna : " . $mango->getWarna()    . "<br>";
echo "Berat : " . $mango->getBerat()    . " gram<br>";

echo "<hr>";

// =============================================
// ANALISIS ERROR
// =============================================
echo "<h3>Analisis Error:</h3>";
echo "<p>
    Terdapat 2 error pada kode awal:<br><br>
    1. <b>\$mango->warna = 'Yellow'</b><br>
       Properti \$warna bersifat protected, 
       sehingga tidak bisa diakses langsung dari luar class. 
       Solusinya: gunakan method setter setWarna().<br><br>

    2. <b>\$mango->buah = '300'</b><br>
       Terdapat 2 kesalahan sekaligus: nama properti salah (harusnya \$berat, 
       bukan \$buah), dan properti \$berat bersifat private sehingga tidak bisa 
       diakses langsung dari luar class. 
       Solusinya: gunakan method setter setBerat().
</p>";

?>