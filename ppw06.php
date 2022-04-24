<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>PPW06</title>
</head>
<body>
    <table cellpadding="0px" cellspacing="0px">
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <tr>
        <?php for ($j = $i; $j >= 1; $j--) {
            if ($j %2 == 0) { ?>
                <td style='width:100px;height:100px;border:1px solid black;background-color: red;'></td>
            <?php }
            else { ?>
                <td style='width:100px;height:100px;border:1px solid black;background-color: blue;'></td>
            <?php }
        } ?>
        </tr>
    <?php } ?>
    </table>
</body>
</html>