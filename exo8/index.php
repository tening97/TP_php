<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="controller.php" method="post">
        <input type="text" name="num" placeholder="Entrez un nombre" value="<?php echo $num; ?>">
        <input type="submit" value="GENERE" name="ok">
    </form>
    <?php
    // require("controller.php");
    ?>
</body>

</html>