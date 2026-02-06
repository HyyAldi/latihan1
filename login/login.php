<?php
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek username + password
    if ($_POST["username"] == "admin" && $_POST["password"] == "12345") {
        // jik benar maka redirect(pindah) ke halaman admin.php
        header("Location: admin.php");
        exit;
    } else {
        // jika salah maka tampilakn pesan kesalahan
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>login admin</h1>

    <?php if (isset($error)) : ?>
        <h3 style="color: red;">username / password salah</h3>
    <?php endif; ?>

    <ul style="list-style: square;">
        <form action="" method="post">
            <li>
                <label for="username">username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>

</body>

</html>