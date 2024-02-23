<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catur</title>
    <style>
        .warna1 {
            background-color: aliceblue;
            height: 40px;
            width: 40px;
        }

        .warna2 {
            background-color: black;
            height: 40px;
            width: 40px;
        }
    </style>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="40">
        <?php
        for ($i = 1; $i <= 5; $i++) :
        ?>

            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <?php $ij = $i + $j; ?>
                    <?php if ($ij % 2 == 0) : ?>
                        <td class="warna1"></td>
                    <?php else : ?>
                        <td class="warna2"></td>
                    <?php endif ?>


                <?php endfor ?>
            </tr>
        <?php endfor ?>

    </table>
</body>

</html>