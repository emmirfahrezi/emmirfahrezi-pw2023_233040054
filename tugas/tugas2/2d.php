<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box-white {
            height: 40px;
            width: 40px;
            background-color: beige;
        }

        .box-black {
            height: 40px;
            width: 40px;
            background-color: blueviolet;
        }
    </style>
</head>

<body>
    <?php

    for ($i = 1; $i <= 25; $i++) {
        echo "<div class =\"box-wrap\">";
        if ($i % 2 == 0) {
            echo "<div class =\"box-white\">$i</div>";
        } else if ($i % 1 == 0) {
            echo "<div class =\"box-black\">$i</div>";
        } else {
            echo " $i <br>";
        }
        echo "</div>";
    }

    ?>
</body>

</html>