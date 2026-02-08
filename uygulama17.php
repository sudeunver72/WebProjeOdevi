<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dongu Deyimleri</title>
</head>
<body>
    <?php
    $not1=65;# not1 degiskenien 65 degerini atadim.
    $not2=100;# not2 degiskenine 100 degerini atadim.
    $toplam=0;# toplanan sayilar bu degikenin icerisine aktarilacak.
    $adet=0;# ne kadar sayi topladigimizi sayacak ortalama icin.
    for($not=$not1; $not<=$not2; $not++){# 65 ten basla 100 e gelene kadra devam et her sefrinde 1 artir.
        $toplam+=$not;# her gelen sayiyi ekler.
        $adet++;# sayiyi sayar her turda bir artirir.
    }
    $ortalama=$toplam/$adet;# toplami adete boler ortalamayi bulmak icin.
    echo "ortalamanizzz". $ortalama;# ortalamayi ekrana yazdirir.

    ?>
    
</body>
</html>