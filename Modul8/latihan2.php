<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Variabel PHP</title>
    <link rel="icon" type="img/png" href="gambar/iconphp.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{253307038}">
    <meta name="author" content="{Anggun Sonya Meylani}">

</head>

<body>
        <?php

        $txt = "Selamat Datang!";
        $txt2 = "Politeknik Negeri Madiun";
        $x = "5";
        $y = "12.5";

        echo "<p> isi variabel txt adalah: $txt</p>";
        echo "<p> isi variabel x adalah: $x</p>";
        echo "<p> isi variabel y adalah: $y</p>";
        echo "Belajar PHP di " . $txt2 . "<br><br>";
        echo $x + $y . "<br>";

        define("nama_lengkap", "Anggun Sonya Meylani");
        echo "<br>".nama_lengkap;

        ?>

    </body>
</html>
