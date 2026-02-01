<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>

    <style>
        #tableBG {
            background-color: red;
        }

        #tableBG2 {
            background-color: blue;
        }
    </style>
</head>

<body>
    <?php
    // <!-- variable php -->
    // $a = 5;
    // $b = 5;
    // $c = $a + $b;
    // // <!-- variable php -->
    // print "hasil dari $a + $b adalah $c";





    // // penggabungan string
    // $nama_depan = "aldi";
    // $nama_belakang = " kurniawan";
    // print $nama_depan . $nama_belakang;



    // // assigment
    // $x = 1;
    // $x += 2;

    // echo $x;

    // $ndb = "aldi";
    // $ndb .= " kurniawan";

    // echo $ndb;



    // // perbandingan
    // // <, >, <=, >=, ==, !=
    // var_dump(5 == "5");

    // $a = 11;
    // $b = "itu benar";
    // $c = "itu salah";



    // if ($a < 10) {
    //     echo $b;
    // } else {
    //     echo $c;
    // }

    // identitas
    // logika [&&, ||,!] untuk pengkodisian
    // $a = 50;
    // var_dump($a < 100 || $a > 10);
    ?>


    <?php
    // <!-- PENGKONDISIAN / PERCABANGAN [if else, if else, ternary, switch] -->

    // // penggabungan string
    // $nama_depan = "aldi";
    // $nama_belakang = " kurniawan";
    // print $nama_depan . $nama_belakang;



    // // assigment
    // $x = 1;
    // $x += 2;

    // echo $x;

    // $ndb = "aldi";
    // $ndb .= " kurniawan";

    // echo $ndb;



    //perbandingan
    // <, >, <=, >=, ==, !=
    // var_dump(5 == "5");

    // $a = 11;
    // $b = "itu benar";
    // $c = "itu salah";



    // if ($a < 10) {
    //     echo $b;
    // } else {
    //     echo $c;
    // }

    //identitas
    //===, !==


    //logika [&&, ||,!] untuk pengkodisian
    // $a = 50;
    // var_dump($a < 100 || $a > 10);
    ?>

    <?php
    //PENGULANGAN [for,while,do.. while, foreach = pengulangan khusus array]
    //selagi nilai nya true maka lakukan terus program yang ada di dalam nya


    //for (inisialisasi; kondisi; increment/decrement)
    // for($i = 0; $i < 10; $i++) {//hanya mencari nilai true
    // // cara baca nya = untuk(jalankan $1 selama  $1 masih kurang dari 10,
    // // jika $1 masih kurang dari 10 terus ulang program ini. jika $1 sudah 10 maka program berhenti)

    // print "aldi  <br>";

    // }

    //WHILE

    // $i = 0;
    // while ($i < 5) {
    //     echo "hello world <br>";


    //     $i++;
    // }


    // DO.. WHILE
    // $i = 0;
    // do {
    // print "Hello ";
    // $i++;
    // } while ($i < 5);
    // 
    ?>
    <!--  contoh penggunaan PENGULANGAN -->
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- <?php for ($i = 1; $i <= 5; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 5; $j++) {
                        echo "<td>$i,$j</td>";
                    }
                    echo "</tr>";
                } ?> -->

        <!-- ada cara lain dari yang di atas -->
        <!-- penggunaan for dan if -->
        <!-- <?php for ($i = 1; $i <= 5; $i++) : ?>

            <?php if ($i % 2 == 1) : ?>
                <tr id="tableBG">
                <?php else: ?>
                <tr id="tableBG2">
                <?php endif; ?>

                <?php for ($j = 1; $j <= 10; $j++) { ?>
                    <td><?php echo "$i, $j" ?></td>
                <?php } ?>
                </tr>
        <?php endfor ?> -->


    </table>

    <?php
    // PENGKONDISIAN / PERCABANGAN [if,else,ternary,switch]

    // $a = 100;

    // if ($a < 100) {
    //     echo "lebih kecil dari 100";
    // } else if ($a == 100) {
    //     echo "sama dengan 100";
    // } 
    // else {
    //     echo "lebih besar dari 100";
    // } 
    ?>


    <!-- testing -->
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ($a = 1; $a <= 5; $a++) : ?>
            <tr>
                <?php for ($b = 1; $b <= 5; $b++) { ?>
                    <?=abc($a, $b) ?>

                <?php } ?>
            </tr>
        <?php endfor ?>
    </table>

    <?php
    function abc($a, $b)
    {
        if ($a == $b) :
            return "<td style='background-color: aqua;'>$a,$b</td>";
        elseif ($a > $b) :
            return "<td style='background-color: red;'>$a,$b</td>";
        elseif ($a < $b) :
            return "<td style='background-color: pink;'>$a,$b</td>";
        else :
            return "<td>$a,$b</td>";
        endif;
    }

    ?>













</body>

</html>