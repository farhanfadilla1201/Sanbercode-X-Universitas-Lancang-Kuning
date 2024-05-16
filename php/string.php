<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "Halaman string"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh soal</h1>
    <?php
    echo "<h4>Contoh Soal 1</h4>";
     
    $soal1 = "selamat datang di sanbercode";

    echo "kalimat soal 1 : $soal1 <br>";
    echo "panjang kalimat soal 1 : " . strlen($soal1) . "<br>";
    echo "jumlah kata soal 1 : " . str_word_count($soal1) . "<br>";

    echo "<h4>Contoh Soal 2</h4>";
     
    $soal2 = "I Love php";

    echo "kata 1 soal 2 : " . substr($soal2,0,1) . "<br>";
    echo "kata 2 soal 2 : " . substr($soal2,2,4) . "<br>";
    echo "kata 3 soal 2 : " . substr($soal2,6,4) . "<br>";

    echo "<h4>Contoh Soal 3</h4>";
     
    $soal3 ="Php is old but sexy";

    echo "soal 3 : $soal3 <br>";
    echo "soal 3 ganti sting : ". str_replace("Php is old but sexy","PHP is old but awesome",$soal3);
    ?>
</body>
</html>