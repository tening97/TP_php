<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo9</title>
</head>

<body>
    <form action="controller.php" method="post">
        <input type="text" name="num" placeholder="Entrez un nombre">
        <?php
        if (isset($_SESSION['erreur'])) {?>
        <span>
        <?php
            echo $_SESSION['erreur']['num'];

        }
       ?>
        </span>
        <input type="submit" value="GENERE" name="ok">
    </form>
   
</body>

</html>
<?php
if (isset($_SESSION['erreur'])) {
    unset($_SESSION['erreur']);
}?>