<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantiksal Oparatorler</title>
</head>
<body>
    <?php
    $a=10;#$a degiskenine 10 degerini atadim.
    $b=15;#$b degiskenine 15 degerini atadim.
    echo (!(($a>=$b xor $a>1) and ($a>=10) ||(!($a>$b))))#10 degerinin 15 den buyuk veya esit olup olmadigi ve 10 un 1 den kucuk olup olmadigi birlikte kontrol edilir ve bu iki sartin sonuncu ters cevrilerek ekrana yazdirir.
    ?>
</body>
</html>