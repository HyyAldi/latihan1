<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php function name () {
        echo "aldi";
    }?>
    <h2>Selamat Datang <?php name();?> </h2> -->



    <!-- <?php function kalkulator ($a,$b,$c) {
        
        if($c == "+") {
            $d = $a + $b;
        } elseif($c == "-") {
            $d = $a - $b;
        } elseif ($c == "*") {
            $d = $a * $b;
        } elseif ($c == "/") {
            $d = $a/$b;
        }
        return $d ;
        }
     echo kalkulator(4,2,"*"); ?> -->


    <?php function sayHello ($time = "datang",$name = "prof") {
        return "Selamat $time, $name";
        } ?>
    <h1><?= sayHello("pagi", "Liaa") ?></h1>

</body>
</html>