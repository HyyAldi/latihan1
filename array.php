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
        div {
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
    $nilai = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11,13,14];
    ?>

    <!-- INI STATIC karna ketika $nilai1 di tambah maka dia tidak akan tampil
     dilayar  -->
    <!-- <?php for ($i = 0; $i < 10; $i++) : ?>
    <div><?= $nilai[$i]; ?></div>
    <?php endfor ?> -->

    <!-- cara dinamis -->
    <!-- <?php for($i = 0; $i < count($nilai); $i++) :?>
    <div><?= $nilai[$i]; ?></div>
    <?php endfor ?> -->

    <!-- Ada yang lebih gampang menggunakan foreach -->
    <!-- <?php foreach( $nilai as $a ) : ?>
    <div> <?= $a; ?> </div>
    <?php endforeach ?> -->

    


</body>

</html>