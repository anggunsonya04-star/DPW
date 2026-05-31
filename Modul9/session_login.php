<?php

echo "<title>Session Login</title>";
echo "<h2>Login dengan Session</h2>";

session_start();

// Proses logout
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: session_login.php");
    exit();
}

// Proses login dengan exception handling
if (isset($_POST["login"])) {
    try {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Exception jika username kosong
        if (empty($username)) {
            throw new Exception("Username tidak boleh kosong!");
        }

        // Exception jika password kosong
        if (empty($password)) {
            throw new Exception("Password tidak boleh kosong!");
        }

        // Exception jika username atau password salah
        if ($username != "admin" || $password != "12345") {
            throw new Exception("Username atau password salah!");
        }

        // Jika semua lolos simpan ke session
        $_SESSION["login"]    = true;
        $_SESSION["username"] = $username;

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br><br>";
    }
}

// Jika sudah login tampilkan halaman dashboard
if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
    echo "Selamat datang, <b>" . $_SESSION["username"] . "</b>!<br><br>";
    echo "<form method='post'>
        <input type='submit' name='logout' value='Logout'>
    </form>";
} else {
    // Jika belum login tampilkan form login
    echo "<form method='post'>
        Username : <input type='text'     name='username' placeholder='Masukkan username'><br><br>
        Password : <input type='password' name='password' placeholder='Masukkan password'><br><br>
        <input type='submit' name='login' value='Login'>
    </form>";
}
?>