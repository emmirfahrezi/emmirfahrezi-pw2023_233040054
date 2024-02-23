<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: aquamarine;
            border: 2px solid black;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            line-height: 50px;

        }

        .box-wrap {
            display: flex;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        echo "<div class =\"box-wrap\">";
        for ($t = 1; $t <= $i; $t++) {
            echo "<div class =\"box\">$t</div>";
        }
        echo "</div>";
    }
    ?>
</body>

</html>