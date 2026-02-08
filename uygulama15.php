<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dongu Deyimleri</title>
</head>
<body>
    <?php
    $toplam=0;# $toplam degiskenin icerisine 0 degerini atadim toplami icinde tutsun diye.
    for ($i=0; $i<=100; $i+=2){# sayac 0 dan baslasin,100 e gelene kadar devam etsin. her turda 2 de artsin. 
    $toplam+=$i;#gelen rakami degiskenin icine ekliyor.       
    }
    echo "toplam:".$toplam;# toplam sonucu ekrana yazdirir.
    ?>
</body>
</html>