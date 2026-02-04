<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>ul{
            list-style: none;
     }</style>
</head>
<body>
    <ul>
        <li><img src="" alt="<?= $_GET["judul"]; ?>"></li>
        <li>judul : <?= $_GET["judul"] ?></li>
        <li>jumlah halaman : <?= $_GET["halaman"] ?></li>
        <li>penulis : <?= $_GET["penulis"] ?></li>
        <li>penerbit : <?= $_GET["penerbit"] ?></li>
    </ul>
    <h4><a href="get&post.php">kembali ke halaman utama</a></h4>
</body>
</html>