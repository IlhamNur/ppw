<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>PPW06</title>
</head>
<body>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <?php for ($j = $i; $j >= 1; $j--) { ?>
            <div style='width:100px;height:100px;border:1px solid black;background-color:<?= $j % 
            2
                ? 'blue'
                : 'red' ?>'></div>
        <?php } ?>
         
    <?php } ?>
</body>
</html>