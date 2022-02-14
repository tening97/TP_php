<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo8</title>
</head>

<body>

    <legend> Vous voulez comptez jusqu'a?</legend>
    <form action="controller.php" method="post">
        <input type="text" name="num" placeholder="Entrez un nombre" value="">
        <?php if (isset($_SESSION['erreur'])) { ?>
            <span><?php
                    echo $_SESSION['erreur']['num'];
                } ?></span><br>
            <input type="submit" value="Comptez" name="ok">
    </form>
    <?php
    if (isset($_SESSION['num'])) {
        unset($_SESSION['num']);
    }
    if (isset($_SESSION['erreur'])) {
        unset($_SESSION['erreur']);
    }

    ?>
</body>
<style>
    body {

        display: flex;
        font-size: 40px;
        flex-direction: column;
        justify-items: center;
        align-items: center;
    }
input{
    width: 100%;
    height: 2vh;
}
</style>

</html>