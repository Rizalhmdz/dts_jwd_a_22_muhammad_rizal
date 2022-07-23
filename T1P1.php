<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>A. MENGHITUNG LUAS LINGKARAN</h3>
<form method="GET">
    <input type="text" name="num0" placeholder="Masukkan nilai Jari-jari">
    <button name="calculate" value="calculate" type="submit">Hitung</button>
</form>

<?php
if (isset($_GET['calculate'])) {
    $num0 = $_GET['num0'];
    if(is_numeric($num0)) {
        $luas = 3.14 * $num0 * $num0;
        echo "Luas Lingkaran = " . $luas;
    } else {
        echo "INPUT HARUS BILANGAN BULAT !!!";
    }
}
?>

<h3>B. PERBANDINGAN 2 BILANGAN</h3>
<form method="GET">
    <input type="text" name="num1" placeholder="Masukkan Bilangan 1">
    <br><br>
    <input type="text" name="num2" placeholder="Masukkan Bilangan 2">
    <br><br>
    <button name="submit" value="submit" type="submit">Bandingkan</button>
</form>

<?php
if (isset($_GET['submit'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    if(is_numeric($num1) && is_numeric($num2)) {
        if ($num1 > $num2) {
            echo "Bilangan Pertama lebih besar";
        } else if ($num1 < $num2) {
            echo "Bilangan Kedua lebih besar";
        } else if ($num1 = $num2) {
            echo "Bilangan Sama besar";
        }
    } else {
        echo "INPUT HARUS BILANGAN BULAT !!!";
    }
}
?>
    
</body>
</html>