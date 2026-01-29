<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Kontrol Deyimleri</title>
</head>
<body>
    <?php

    $dogru_kullanici="ferhat";#$dogru_kullanici degiskenine ferhat degerini atadim.
    $dogru_sifre="1907";# $dogru_sifre degiskenine 1907 degerini atadim.
    $girilen_kullanici="ferhat";# $girilen_kullanici degiskenine ferhat degerini atadim.
    $girilen_sifre="1907";#$girilen_sifre degiskenine 1907 degerini atadim.
    if(# eger
        $girilen_kullanici===$dogru_kullanici &&  $girilen_sifre === $dogru_sifre{#$girilen_kullanici adi esitse $dogru_kullanici adina ve $girilen_sifre esitse $dogru_sifre ye. 
            echo "basarili bir sekilde giris yaptiniz.";#basarili bir sekilde giris yaptiniz ekrana yazilsin.
        }
        else{# degilse.
            echo "hatali grirs yaptiniz."# hatali giris yaptiniz ekrana yazilsin.
        }
    )
    ?>
</body>
</html>