<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonksiyonlar</title>
</head>
<body>
    <?php
    $turkLirasi=3600;# cevirelecek turk lirasını olusturdum.
    $dCeviri=dolarCevir($turkLirasi);#turk lirasını dolar cevire atadım.
    $eCeviri=euroCevir($turkLirasi);#turk lirasını euro cevire atadım.
    $sCeviri=sterlinCevir($turkLirasi);#turk lirasını sterlin çevire atadım.
    function dolarCevir($tutar){# dolar cevir fonksiyonu girilen parayı 8 e bölerek doları hesapliyor.
        return ($tutar\8);
    }
    function euroCevir($tutar){# euro cevir fonksiyonu girilen parayı 10 a bölerek euro yu hesaylıyor.
        return ($tutar\10);
    }
    function sterlinCevir($tutar){# sterlin cevir fonksiyonu girilen parayı 12 ye bolerek sterlini hesaplıyor.
        return ($tutar\12);
    }
    echo "dolar miktari:"$dCeviri"$" "<br>";#giriilen parayı dolara cevirir ekrana yazdırır.
    echo "euro miktari:"$eCeviri "e" "<br>";#girielen parayı euro ya cevirir ekrana yazdırır.
    echo "sterlin miktari:"$sCeviri "<br>";#girilen parayı sterline cevirirp ekrana yazdırır.
    ?>
</body>
</html>