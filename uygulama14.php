<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Kontrol Deyimleri</title>
</head>
<body>
    <?php
    $ucret=200;#$ucret degiskenine 200 degerini atadim.
    $ogrenciBelgesi=true;#ogrenci belgesi var anlamina gelir(true==var).
    if($ucret>=200)#eger ucret 200 liraya buyuk esitse.
        if($ogrenciBelgesi==true){#eger ogrenci belgesi varsa.
            echo "uyelik olusturuldu";#uyelik olusturuldu ekrana yazilsin.
        }
        else#sartlar saglanmiyorsa.
            echo "ogrenci belgesi yok,ucret yetersiz uyelik olusurulamdi.";#sartlar saglanmadigi takdirde ekrana yazilsin.
    ?>
</body>
</html>