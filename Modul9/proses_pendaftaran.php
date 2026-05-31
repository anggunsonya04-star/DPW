<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    Selamat datang <b><?php echo $_POST["nama"]; ?></b><br>
    NIM : <?php echo $_POST["nim"]; ?><br>
    Email : <?php echo $_POST["email"]; ?><br>
    Tempat, tanggal lahir : <?php echo $_POST["tempat"]; ?><br>
    Alamat : <?php echo $_POST["alamat"]; ?><br>
    Jenis Kelamin : <?php echo $_POST["gender"]; ?><br>

    <h3>Kesimpulan</h3>
    <p>Method <b>POST</b> mengirim data melalui body HTTP sehingga data tidak terlihat 
        di URL, lebih aman, dan tidak memiliki batas ukuran data. Cocok digunakan untuk 
        form pendaftaran, login, atau data yang bersifat sensitif.<br><br>
        Sedangkan method <b>GET</b> mengirim data melalui URL sehingga data terlihat langsung di 
        address bar browser. Cocok digunakan untuk pencarian atau filter karena hasilnya 
        bisa disimpan dan dibagikan lewat URL, namun kurang aman untuk data sensitif. </p>

</body>
</html>