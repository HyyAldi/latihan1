<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>


    <!-- yg ada di dalam form itu akan dikirim ke forpost.php menggunakan metode post -->
    <!-- jika action dikosongkan maka data akan dikirim ke post.php  -->
    <form action="" method="post">
        nama : 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
    <?php if(isset($_POST["submit"])) : ?>
        <h3>Haiii... Selamat Pagi <?= $_POST["nama"]; ?></h3>
    <?php endif?>


    <!-- //coba" -->
    <!-- <?php if (isset($_GET["nama"])) {
                echo ("<br>");
                echo "Haii... " . $_GET["nama"];
            } ?> -->

    <!-- //latihan -->
    <!-- <form action="forpost.php" method="post">
        nilai pertama :
        <input type="text" name="nilai1">
        <br>
        nilai kedua : 
        <input type="text" name="nilai2">
        <button type="submit" name="submit">kirim</button>
    </form> -->





</body>

</html>