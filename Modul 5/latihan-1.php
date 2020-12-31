<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <fieldset>
        <h1>Kalkulator Sederhana</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>
                <label>Bilangan 1:</label><br>
                <input type="text" id="textbox" name="bil1" style=" height:30px; width:800px;" />
            </p>
            <p>
                <label>Bilangan 2:</label><br>
                <input type="text" id="textbox" name="bil2" style=" height:30px; width:800px;" />
            </p>
            <p>
                <input type="submit" name="submit" style=" height:40px; width:100px;" value="Submit" />
            </p>

        </form>
    </fieldset>

    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['bil1'] + $_POST['bil2'];
        $b = $_POST['bil1'] - $_POST['bil2'];
        $c = $_POST['bil1'] * $_POST['bil2'];
        $d = $_POST['bil1'] / $_POST['bil2'];
        $e = $_POST['bil1'] % $_POST['bil2'];
        echo "<table border=1 width=50% style=" ?> height:30px; width:800px;<?php ">";

                                                                            echo '<tr>';
                                                                            echo "<td>Penjumlahan</td>";
                                                                            echo "<td>" . $a . "</td>";
                                                                            echo "</tr>";

                                                                            echo '<tr>';
                                                                            echo "<td>Pengurangan</td>";
                                                                            echo "<td>" . $b . "</td>";
                                                                            echo "</tr>";

                                                                            echo '<tr>';
                                                                            echo "<td>Perkalian</td>";
                                                                            echo "<td>" . $c . "</td>";
                                                                            echo "</tr>";

                                                                            echo '<tr>';
                                                                            echo "<td>Pembagian</td>";
                                                                            echo "<td>" . $d . "</td>";
                                                                            echo "</tr>";

                                                                            echo '<tr>';
                                                                            echo "<td>Modulo</td>";
                                                                            echo "<td>" . $e . "</td>";
                                                                            echo "</tr>";

                                                                            echo "</table>";
                                                                        }

                                                                            ?>
</body>

</html>