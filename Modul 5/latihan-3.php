<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Mencari Bilangan Prima 1-50</title>
</head>
<style>
    * {
        font-size: 12pt;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>
    <?php
    echo 'Bilangan Prima 1-50 :';
    echo '<br>';
    for ($i = 1; $i <= 50; $i++) {
        $sumbagi = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $sumbagi++;
            }
        }
        if ($sumbagi <= 2) {
            echo $i . ' ';
        }
    }
    ?>
</body>

</html>