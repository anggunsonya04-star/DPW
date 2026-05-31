<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Keliling Lingkaran</title>
    <link rel="icon" type="img/png" href="gambar/iconphp.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{253307038}">
    <meta name="author" content="{Anggun Sonya Meylani}">
</head>

<body>
    <h2>Menghitung Keliling Lingkaran</h2>

    <?php

    //Variabel
    $jari_jari = 15;
    $phi = 3.14;

    //Rumus keliling lingkaran = 2 x phi x r
    $keliling = 2*$phi*$jari_jari;

    //Menampilkan hasil
    echo "<p>Jari-jari : $jari_jari cm</p>";
    echo "<p>Phi       : $phi</p>";
    echo "<p>Rumus     : 2 x phi x r</p>";
    echo "<p>Keliling  : 2 x $phi x $jari_jari = <b>$keliling cm</b></p>";

    ?>

</body>
</html>