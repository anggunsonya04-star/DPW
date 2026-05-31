<?php

class buah2
{
    public $nama;
    public $warna;
    public $bobot;

    function set_name($n)
    {
        $this->nama = $n;
    }

    // ERROR ASAL: protected function set_color()
    // Diperbaiki: diubah menjadi public agar bisa dipanggil dari luar class
    public function set_color($n)
    {
        $this->warna = $n;
    }

    // ERROR ASAL: private function set_weight()
    // Diperbaiki: diubah menjadi public agar bisa dipanggil dari luar class
    public function set_weight($n)
    {
        $this->bobot = $n;
    }
}

$mango = new buah2();
$mango->set_name('Mango');
$mango->set_color('Yellow'); // ERROR asal: set_color() bersifat protected
$mango->set_weight('300');   // ERROR asal: set_weight() bersifat private

echo "Nama  : " . $mango->nama   . "<br>";
echo "Warna : " . $mango->warna  . "<br>";
echo "Berat : " . $mango->bobot  . " gram<br>";

echo "<hr>";

// =============================================
// ANALISIS ERROR
// =============================================
echo "<h3>Analisis Error:</h3>";
echo "<p>
    Terdapat 2 error pada kode awal:<br><br>
    1. <b>protected function set_color()</b><br>
       Method <code>set_color()</code> bersifat <code>protected</code>, 
       sehingga tidak bisa dipanggil langsung dari luar class. 
       Solusinya: ubah access modifier menjadi <code>public</code>.<br><br>

    2. <b>private function set_weight()</b><br>
       Method <code>set_weight()</code> bersifat <code>private</code>, 
       sehingga tidak bisa dipanggil dari luar class. 
       Solusinya: ubah access modifier menjadi <code>public</code>.<br><br>

    Kesimpulan: Berbeda dengan nomor 5 yang errornya ada pada <b>properti</b>, 
    error pada buah2.php ini ada pada <b>method</b>-nya. 
    Prinsipnya sama — method yang bersifat protected atau private 
    tidak bisa dipanggil dari luar class secara langsung.
</p>";

?>