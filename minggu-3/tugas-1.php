<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Faktorial</title>
</head>

<body>

    <fieldset>
        <h2 style="font-size:30pt;">Mencari Bilangan Faktorial</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>
                <label>Masukkan Bilangan :</label><br>
                <input type="text" id="textbox" name="num" style="font-size:12pt; height:30px; width:800px;" />
            </p>
            <p>
                <input type="submit" name="submit" style="background-color:#2a77e8; color:white; height:40px; width:100px;" value="Cari Faktorial" />
            </p>

        </form>
    </fieldset>

    <?php
    function faktorial($value)
    {

        if ($value <= 1) {
            return 1;
        } else {
            return $value * faktorial($value - 1);
        }
    }

    if (isset($_POST['submit'])) {
        $bilangan = $_POST['num'];
        faktorial($bilangan);
    }

    ?>
</body>

</html>