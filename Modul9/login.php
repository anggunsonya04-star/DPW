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

$name = $email = "";
$nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["u"])) {
        $nameErr = "masukkan username";
    } else {
        $name = bersihkan_input($_POST["u"]);
    }
    if (empty($_POST["p"])) {
        $emailErr = "masukkan password";
    } else {
        $email = bersihkan_input($_POST["p"]);
    }
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="u">
    <span style="color:red; font-size:12px;">* <?php echo $nameErr; ?></span>
    <br><br>
    Password: <input type="password" name="p">
    <span style="color:red; font-size:12px;">* <?php echo $emailErr; ?></span>
    <br><br>
    <input type="submit" value="Login">
</form>
</body>
</html>