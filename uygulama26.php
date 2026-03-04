<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematik Fonksiyonlari</title>
</head>
<body>
    <?php
    $x=2;#x degiskenine 2 degerini atadım.
    $Y=4;#y degiskenine 4 degerini atadım.
    $islem=abs(pow($x,5)-(pow($x,4)*pow($y,2))+7*sqrt($y)-35);#burda x in 5. kuvvetini aldım,x in 4. kuvveti ile y nin 2 kuvvetini çarp,ilkinden ikinciyi çıkar,7 tane karekök y ekle,35 çıkar,sonucu negatifse pozitife çevir.
    echo "MATEMATİKSEL İŞLEMİN SONUCU:".$islem;#islem sonucunu ekrana yazdıırır.
    ?>
</body>
</html>