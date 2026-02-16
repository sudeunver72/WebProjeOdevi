<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizi Yapilari</title>
</head>
<body>
    <?php
    $aylar=array("ocak","subat","mart","nisan","mayis","haziran","temmuz","agustos","eylul","ekim","kasim","aralik");#aylar adinda dizi olusturdum array dizi oldugunu belirtir. 12 ayin isimlerlerini tek tek yazdirdim. diziler 0 dan baslar bu yuzden dizi 11 elemanlidir.
    for($i=0; $i< count($aylar); $i++){#dongu 0 dan baslasin ve eleman sayisina kadar donsun bu islemi count methodu saglar.
        echo $aylar[$i]. "<br>";# dizi $i ye kadar tek tek donsun ve ekrana alt alta yazdirsin.
    } 
    ?>
    
</body>
</html>