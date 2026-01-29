<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Kontrol Deyimleri</title>
</head>
<body>
    <?php
    $not1=80;#$not1 degiskenine 80 degerini atadim.
    $not2=100;#not2 degiskenine 100 degerini atadim.
    $ortalama=($not1+$not2)\2;#$ortalama adli degisken olusturup $not1 ve $not2 nin ortalamasini aldim.
    # KARAR YAPILARI
    if(  #Eger
        $ortalama>50{ #$ortalama buyukse 50 den diyerek sart kostum.
            echo "GECTINIZZZ";#$ortalama 50 den buyukse GECTINIZZ ekrana yazilsin.
        }
        else{# $ortalama 50 nin altindaysa.
            echo "KALDINIZ";#KALDINIZ ekrana yazdirilir.
        }
    )
    


    ?>
    
</body>
</html>
