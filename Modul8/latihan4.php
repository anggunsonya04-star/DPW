<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Percabangan PHP</title>
    <link rel="icon" type="img/png" href="gambar/iconphp.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{253307038}">
    <meta name="author" content="{Anggun Sonya Meylani}">
</head>

<body>
    <h2>Latihan Percabangan PHP</h2>

    <?php

    /*Operator logika yang bisa digunakan
    * ==    Sama Dengan             $x == $y
    * ===   Identical               $x === $y
    * !=    Tidak sama dengan       $x != $y
    * <>    Tidak sama dengan       $x <> $y
    * !==   Not identical           $x !== $y
    * >     Lebih Besar dari        $x > $y
    * <     Kurang dari             $x < $y
    * >=    Lebih besar atau Sama dengan    $x >= $y
    * <=    Kurang dari atau sama dengan    $x <= $y
    * <=>   Spaceship               $x <=> $y
    */

    $t = date("H");
    //if
    echo "<br> If <br>";
    if ($t < 16) {
        echo "Selamat siang!";
    }

    echo "<br>";

    //if else
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }

    echo "<br>";

    //nested if
    echo "<br> Nested If <br>";
    if ($t < 12) {
        echo "Selamat pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat malam!";
    }

    ?>

</body>
</html>