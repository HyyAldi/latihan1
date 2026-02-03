<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    //variable scope / lingkup variable

    // 1 = variable lokal dan global
    //jadi.. semisal kita membuat function dan akan menggunakan variable yang 
    // di luar function tersebut, yang terjadi adalah kita tidak bisa akses variable
    // nya dari dalam function. dan untuk solusi kita menggunakan `global variablenya` 
    // sebagai contoh :
    $a = 50; // berada di luar function

    function tampilA() {
        global $a; //dgn menggunakan global kita bisa akses $a yang ada di luar variable
        echo $a; //jika tdk ada global ini error
    }
    tampilA();


    // 2 = variable SuperGlobals
    ?>
    






</body>
</html>