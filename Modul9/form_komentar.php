<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
<?php
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $email = $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = bersihkan_input($_POST["nama"]);
    $email = bersihkan_input($_POST["email"]);
    $comment = bersihkan_input($_POST["comment"]);
    echo ("Nama : " . $name . "<br>");
    echo ("Email : " . $email . "<br>");
    echo ("Komentar : " . $comment . "<br>");
    echo ("<hr>");
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama"> <br><br>
        E-mail: <input type="text" name="email"> <br><br>
        Komentar: <textarea name="comment" rows="5" cols="40"></textarea> <br><br>
        <input type="submit" value="Simpan">
        <input type="reset" value="Bersihkan">
</form>

<h3>Kesimpulan</h3>
<p>Pada praktikum ini dipelajari cara membaca input dari form menggunakan 
    <b>$_POST</b> dan pentingnya memfilter input sebelum ditampilkan. Jika tanpa filter, input berbahaya seperti < dan > akan dieksekusi oleh browser sebagai kode HTML sehingga muncul popup alert, ini disebut serangan XSS (Cross-Site Scripting).
    Jika dengan filter menggunakan htmlspecialchars(), karakter berbahaya diubah menjadi teks biasa sehingga browser tidak mengeksekusinya dan halaman tetap aman. </p>

</body>
</html>