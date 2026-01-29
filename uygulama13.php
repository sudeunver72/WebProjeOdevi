<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Kontrol Deyimleri</title>
</head>
<body>
    <?php
    $sifre1=12345;#$sifre1 degiskeninin icine 12345 degerini atadim.
    $sifre2=34342;#$sifre2 degiskeninin icerisine 34342 degerini atadim.
    if($sifre1 == $sifre2){#her iki sifre birbirine esit ise;
        if(true){
            echo "sifreler esit,kayit basarili";#esitlik saglaniyorsa ekrana yazsin.
        }
        else {#aksi halde
            echo "sifreler esit degil,kayit basarisiz";#saglanmiyorsa yazdirsin.
        }
    }
    ?>
    
</body>
</html>