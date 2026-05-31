<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {

    // memanggil file koneksi.php
    include 'koneksi.php';

    // menampung data dari form edit
    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    // buat dan jalankan query UPDATE
    $query  = "UPDATE t_mahasiswa 
               SET namaMhs = '$namaMhs', 
                   prodi   = '$prodi', 
                   alamat  = '$alamat', 
                   noHP    = '$noHP' 
               WHERE npm = '$npm'";
    $result = mysqli_query($link, $query);

    // periksa hasil query apakah ada error
    if (!$result) {
        die("Query gagal: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }

    // redirect ke viewmahasiswa setelah berhasil update
    header("location:viewmahasiswa.php");
    exit();

} else {
    header("location:viewmahasiswa.php");
    exit();
}
?>