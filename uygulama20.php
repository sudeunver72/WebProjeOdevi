<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizi Yapilari</title>
</head>
<body>
    <?php
    $ogrenciler=array["ufuk","hayri","ahmet","huseyin","sumeyra","abdullah","tuba","merve","afet","sude"];#ogrenciler adli dizi olusturup icine 9 tane eleman yazdim.
    unset($ogrenciler[1]);# 1 nolu elemani siler.
    unset($ogrenciler[4]);# 3 nolu elemani siler.
    unset($ogrenciler[7]);# 7 nolu elemani siler.
    foreach($ogrenciler as $i){# dongu calistiginda her elemani tutar ve $i nin icine atar.
        echo $i. "<br>";# ogrenci adlarini tek tek alt alta yazdirir.
    }

    ?>
    
</body>
</html>