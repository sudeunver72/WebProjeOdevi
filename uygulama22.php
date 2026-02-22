<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonksiyonlar</title>
</head>
<body>
    <?php
    date_default_timezone_set('Europe/Istanbul');#istanbul avrupa saatini kullanır.
    echo "gecen saniyeler:".time()."<br>";#1 ocak 1970 ten bugune kadar gecen saniyelerin sayısnını yazdırır.
    echo date('d.m.Y H:i:s ',time())."<br>";#gün,ay,yıl,saat,dakika,saniyeleri verir.
    echo 'Saat'.date('H.i')."<br>";#sadece saat yazdırır.
    echo date('d F y l')."<br>";# gün,ay,yıl,ve gün adı olacak şekilde farklı bi şekilde yazdırır.
    ?>
    
</body>
</html>