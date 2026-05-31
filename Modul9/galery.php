<?php

echo "<title>Galeri</title>";
echo "<h2>Galeri Gambar</h2>";

echo "<style>
    .galeri {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 8px;
    }
</style>";

$fileList = glob('gambar/*');

echo "<div class='galeri'>";

foreach ($fileList as $filename) {
    if (is_file($filename)) {
        echo "<div style='border: 1px solid #ccc;'>";
        echo "<img src='$filename' width='100%' height='150' style='object-fit: contain; display: block; background: #f0f0f0;'><br>";
        echo "<small>" . basename($filename) . "</small>";
        echo "</div>";
    }
}

echo "</div>";
?>