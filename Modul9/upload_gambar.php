<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{tulis nim anda disini}">
    <meta name="author" content="{tulis nama anda disini}">
</head>
<body>

<?php
$target_dir  = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk    = 1;
    $tipeGambar  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// cek apakah ada kiriman data dengan metode post
if (isset($_POST["submit"])) {
    // cek apakah file berupa gambar
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        echo "File berupa citra/gambar - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.<br>";
        $uploadOk = 0;
    }
}

// cek apakah ada file dengan nama yang sama
 if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
}

// cek ukuran file
if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, file anda terlalu besar.<br>";
        $uploadOk = 0;
}

// Filter format
if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
        echo "Sorry, hanya file JPG, JPEG, PNG & GIF.<br>";
        $uploadOk = 0;
}

// cek jika $uploadOk telah sesuai dengan kriteria
 if ($uploadOk == 0) {
        echo "Sorry, File anda gagal upload.<br>";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil Upload.";
        } else {
            echo "Sorry, Ada eror saat upload.";
        }
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <p><label>Pilih Gambar yang akan di upload :</label><br>
        <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
    <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>