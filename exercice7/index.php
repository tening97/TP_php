<?php
require "controller.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <label for="">Entrez le jour</label>
        <input type="text" name="jour">
        <label for="">Entrez le mois</label>
        <input type="text" name="mois" value="<?php echo $mois ?>">
        <label for="">Entrez l'année</label>
        <input type="text" name="an">
        <input type="submit" value="OK" name="ok">
    </form>

</body>

</html>