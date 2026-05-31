<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Operator PHP</title>
    <link rel="icon" type="img/png" href="gambar/iconphp.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{253307038}">
    <meta name="author" content="{Anggun Sonya Meylani}">
</head>

<body>
    <?php

    $x = 5;
    $y = 10;

    //Aritmetic operators
    echo "Penambahan ".$x + $y."<br>";
    echo "Pengurangan ".$x - $y."<br>";
    echo "Perkalian ".$x * $y."<br>";
    echo "Pembagian ".$x / $y."<br>";
    echo "Modulus ".$x % $y."<br>";
    echo "Exponensial ".$x ** $y."<br>";
    echo("<br>");

    //Assigment operators
    $x += 2; // $x = $x + 2
    $y *= 2; // $y = $y * 2
    echo "Penambahan x ".$x."<br>";
    echo "Perkalian y ".$y."<br>";
    echo("<br>");

    //Increment/Decrement operators
    echo "Isi ++x = ".++$x."<br>";
    echo "Isi x++ = ".$x++."<br>";
    echo "Isi x = ".$x."<br>";
    echo("<br>");
    echo "Isi --y = ".--$y."<br>";
    echo "Isi y-- = ".$y--."<br>";
    echo "Isi y = ".$y."<br>";
    echo("<br>");

    //Conditional assigment operators
    $user = "Anggun Sonya";
    // <kondisi> ? <nilai jika kondisi true> : <nilai jika kondisi false>
    $status = (empty($user)) ? "Kosong" : "Ada isi";
    echo $status."<br>";
    //variabel $color diisi dengan "red" jika $color tidak atau null
    echo $color = $color ?? "red";

    ?>

    <p><b>Perbedaan:</b> 
    Jika operator <b>++</b> atau <b>--</b> berada di <b>depan</b> variabel (++$x), maka nilai diubah dulu baru ditampilkan. 
    Jika berada di <b>belakang</b> variabel ($x++), maka nilai ditampilkan dulu baru diubah. Hasil akhir nilai variabelnya tetap sama.</p>

</body>
</html>

