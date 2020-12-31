<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Pengurutan Kata</title>
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
    <fieldset>
        <h1>Pengurutan Kata</h1>
        <form method="POST" enctype="multipart/form-data">

            <p>
                <label>Kata ke-1:</label><br>
                <input type="text" id="textbox" name="kata1" style="font-size:12pt; height:30px; width:800px;" />
            </p>
            <p>
                <label>Kata ke-2:</label><br>
                <input type="text" id="textbox" name="kata2" style="font-size:12pt; height:30px; width:800px;" />
            </p>
            <p>
                <label>Kata ke-3:</label><br>
                <input type="text" id="textbox" name="kata3" style="font-size:12pt; height:30px; width:800px;" />
            </p>
            <p>
                <label>Kata ke-4:</label><br>
                <input type="text" id="textbox" name="kata4" style="font-size:12pt; height:30px; width:800px;" />
            </p>
            <p>
                <label>Kata ke-5:</label><br>
                <input type="text" id="textbox" name="kata5" style="font-size:12pt; height:30px; width:800px;" />
            </p>
            <p>
                <label>Kata ke-6:</label><br>
                <input type="text" id="textbox" name="kata6" style="font-size:12pt; height:30px; width:800px;" />
            </p>
            <p>
                <label>Kata ke-7:</label><br>
                <input type="text" id="textbox" name="kata7" style="font-size:12pt; height:30px; width:800px;" />
            </p>
            <p>
                <label>Kata ke-8:</label><br>
                <input type="text" id="textbox" name="kata8" style="font-size:12pt; height:30px; width:800px;" />
            </p>
            <p>
                <label>Kata ke-9:</label><br>
                <input type="text" id="textbox" name="kata9" style="font-size:12pt; height:30px; width:800px;" />
            </p>
            <p>
                <label>Kata ke-10:</label><br>
                <input type="text" id="textbox" name="kata10" style="font-size:12pt; height:30px; width:800px;" />
            </p>

            <p>
                <input type="submit" name="submit" style="height:40px; width:100px;" value="Urutkan" />
            </p>

        </form>
    </fieldset>

    <?php
    if (isset($_POST['submit'])) {
        $array = array($_POST['kata1'], $_POST['kata2'], $_POST['kata3'], $_POST['kata4'], $_POST['kata5'], $_POST['kata6'], $_POST['kata7'], $_POST['kata8'], $_POST['kata9'], $_POST['kata10']);
        sort($array, SORT_STRING);
        print_r($array);
    }
    ?>
</body>

</html>