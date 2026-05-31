<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {

    // memanggil file koneksi.php
    include 'koneksi.php';

    // menampung data dari form edit
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    // buat dan jalankan query UPDATE
    $query  = "UPDATE t_matakuliah 
               SET namaMK = '$namaMK', 
                   sks    = '$sks', 
                   jam    = '$jam' 
               WHERE kodeMK = '$kodeMK'";
    $result = mysqli_query($link, $query);

    // periksa hasil query apakah ada error
    if (!$result) {
        die("Query gagal: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // redirect ke viewmatakuliah setelah berhasil update
    header("location:viewmatakuliah.php");
    exit();

} else {
    header("location:viewmatakuliah.php");
    exit();
}
?>