<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dongu Deyimleri</title>
</head>
<body>
    <?php
    $sayi=10;#faktoriyelini bulmak istedigim sayi.
    $faktoriyel=1;# carpma yapilacagi icin basta deger 1 olmali.
    for($i=1; $i<=$sayi;$i++){#1 den basla, sayiya kadar git, her seferinde bir arttir.
        $faktoriyel*=$i;#tek tek sayi kadar carpma.
    }
    echo "faktoriyel:".$faktoriyel;# faktoriyeli ekrana yazar.

    ?>
</body>
</html>