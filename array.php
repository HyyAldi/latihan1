<?php
// ARRAY adalah sebuah variabel yang bisa menampung kebih dari 1 nilai \\
//ada 2 cara membuat array di php 
// elemen pada array boleh memiliki tipe data yang berbeda :
// $arrl = [123,"text",false];

// cara 1 / cara lama. contoh :
// $day = array("senin", "selasa" );

// cara 2 / cara baru. contoh :
// $day = ["senin","selasa","rabu","kamis","jumat","sabtu","minggu"];

//menampilkan Array menggunakan var_dump() atau print_r()
// print_r($day);

//menampilkan 1 elemen Array
// echo $day[0];

//menambahkan elemen baru pada Array
// $month = array("januari","februari","maret","april", "mei");
// print_r($month);
// echo "<br>";
// $month[]="juni";
// print_r($month);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #div {
            height: 100px;
            width: 100px;
            border-radius: 10px;
            background-color: aqua;
            text-align: center;
            line-height: 100px;
            margin: 5px;
            float: left;
        }

        ;
    </style>
</head>

<body>

    <?php
    //PENGULANGAN Pada Array
    // for / 
    $nilai = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    ?>

    <!-- INI STATIC karna ketika $nilai1 di tambah maka dia tidak akan tampil
     dilayar  -->
    <!-- <?php for ($i = 0; $i < 10; $i++) : ?>
    <div><?= $nilai[$i]; ?></div>
    <?php endfor ?> -->

    <!-- cara dinamis -->
    <!-- <?php for ($i = 0; $i < count($nilai); $i++) : ?>
    <div><?= $nilai[$i]; ?></div>
    <?php endfor ?> -->

    <!-- Ada yang lebih gampang menggunakan foreach -->
    <!-- <?php foreach ($nilai as $a) : ?>
    <div> <?= $a; ?> </div>
    <?php endforeach ?> -->

    <!-- contoh penggunaan -->
    <!-- <?php $siswa = ["aldi", "01", "XI TKJ 1"]; ?>
    <ul>
        <?php foreach ($siswa as $s) : ?>
            <li><?= $s ?></li>
        <?php endforeach ?>
    </ul> -->


    <!-- semisal siswa nya ada lebih dari 1. 
    menggunakan teknik array dalam array -->
    <!-- array numerik (not recomend) -->
    <!-- <?php $murid = [
                // ini murid pertama
                ["aldi", "01", "XI TKJ 1"], // harus ada koma 
                // ini murid kedua
                ["Lia", "52", "XI idk 1"],
                //ini murid ketiga
                ["someone", "25", "XI ipa 2"]
            ] ?>
    <ul>
        <?php foreach ($murid as $mu) : ?>
            <li>Nama :<?= $mu[0] ?></li>
            <li>Absen :<?= $mu[1] ?></li>
            <li>Kelas :<?= $mu[2] ?></li>
            <br>
        <?php endforeach ?>
    </ul> -->

    <!-- Array Associative-->
    <!-- ini adalah konsep array dalam array -->
    <!-- [warna ungu] = adalah array di dalam array, [] = array -->
    <!-- disini ada 1 array yang membungkus 3 array -->
    <!-- <?php $angka = [ // array 1
                [1, 2, 3], // array 1.1
                [4, 5, 6], // array 1.2
                [7, 8, 9] // array 1.3
            ] ?> -->
    <!-- ini adalah cara menampilkannya -->
    <!-- <?php foreach ($angka as $A) : ?>
        <?php foreach ($A as $a) : ?>
            <div style="width: 50px; height: 50px; line-height: 50px;">
                <?= $a ?>
            </div>
        <?php endforeach ?>
    <?php endforeach ?>
     -->


    <!-- daftar murid menggunakan Array Associative -->
    <!-- <?php $murid = [
        // ini murid pertama
        [
            "nama" => "Aldi",
            "absen" => "01",
            "kelas" => "XI TKJ 1",
            "foto" => "Gaius Iulius Caesar 🗡️.jpeg"
        ],
        // harus ada koma 
        // ini murid kedua
        [
            "nama" => "Lia",
            "absen" => "52",
            "kelas" => "XI IDK 1"

        ],
        //ini murid ketiga
        [
            "nama" => "Someone",
            "absen" => "25",
            "kelas" => "XI IPA 1",
            "foto" => "Marcus Aurelius.jpeg"
        ],
    ] ?>
    <?php foreach ($murid as $mu) : ?>
        <li>
            <img src="foto/<?= $mu["foto"]; ?>">
        </li>
        <li>Nama : <?= $mu["nama"] ?></li>
        <li>Absen : <?= $mu["absen"] ?></li>
        <li>Kelas : <?= $mu["kelas"] ?></li>
        <br>
    <?php endforeach ?> -->


    <!-- PRAKTEK -->

    <!-- <?php $perpustakaan = [
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

    <?php foreach($perpustakaan as $buku) : ?>
        <li>
            <img src="" alt="<?= $buku["judul"] ?>">
        </li>
        <li>judul buku : <?= $buku["judul"] ?></li>
        <li>jumlah halaman : <?= $buku["halaman"] ?></li>
        <li>penulis : <?= $buku["penulis"] ?></li>
        <li>penerbit : <?= $buku["penerbit"] ?></li>
        <br>
    <?php endforeach?> -->



</body>

</html>