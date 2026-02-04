<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style: none;
        }
    </style>
</head>

<body>

    <?php
    //variable scope / lingkup variable

    // 1 = variable lokal dan global
    //jadi.. semisal kita membuat function dan akan menggunakan variable yang 
    // di luar function tersebut, yang terjadi adalah kita tidak bisa akses variable
    // nya dari dalam function. dan untuk solusi kita menggunakan `global variablenya` 
    // sebagai contoh :
    // $a = 50; // berada di luar function

    // function tampilA() {
    //     global $a; //dgn menggunakan global kita bisa akses $a yang ada di luar variable
    //     echo $a; //jika tdk ada global ini error
    // }
    // tampilA();


    // 2 = variable SuperGlobals, variable yang dimiliki php
    // Array Associative
    // [$_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_ENV]
    //var_dump($_SERVER);

    // print_r($_GET);

    ?>

    <?php $perpustakaan = [
        [
            "judul" => "The Richest Man In Babylon",
            "halaman" => "200",
            "penulis" => "George S. Clason",
            "penerbit" => "Gramedia"
        ],
        [
            "judul" => "How To Win Friends & Influence People",
            "halaman" => "271",
            "penulis" => "Dale Carnegie",
            "penerbit" => "Gramedia"
        ],
        [
            "judul" => "Madilog",
            "halaman" => "560",
            "penulis" => "Tan Malaka",
            "penerbit" => "Narasi"
        ]
    ]
    ?>

    <?php foreach ($perpustakaan as $buku) : ?>
        <ul>
            <li> <img src="" alt="<?= $buku["judul"] ?>"> </li>
            <li>judul buku : <a href="get.php?judul=<?= urlencode($buku["judul"]);?>
            &halaman=<?= $buku["halaman"]?>&penulis=<?= $buku["penulis"] ?>&penerbit=<?= $buku["penerbit"] ?>"><?= $buku["judul"] ?></a></li>
            <br>
        </ul>
    <?php endforeach ?>






</body>

</html>