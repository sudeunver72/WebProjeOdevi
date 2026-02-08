<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dongu Deyimleri</title>
</head>
<body>
    <?php
    for($i =0; $i<=100; $i++){# dongu 0 dan baslar 100 kadar gider.
        if($i%5==0){# 5 e tam bolunenlerden kalan 0 mi onu kontrol eder.
            echo $i;# sayilari ekrana yazdirir.
        }
    }
    ?>
</body>
</html>