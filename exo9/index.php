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
    <legend>Vous voulez la table de multiplication de quel nombre?</legend>
    <form action="controller.php" method="post">
        <input type="text" name="num" placeholder="Entrez un nombre">
        <?php
        if (isset($_SESSION['erreur'])) { ?>
            <span>
            <?php
            echo $_SESSION['erreur']['num'];
        }
            ?>
            </span>
            <button type="submit" name="ok">GENERER</button>
    </form>

</body>

</html>
<?php
if (isset($_SESSION['erreur'])) {
    unset($_SESSION['erreur']);
} ?>
<style>

    .form {

        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 100px;
        border-color: solid 2px red;
        font-size: 40Px;
        background-color: slategrey;


    }

    input {
      
        height: 50Px;
        border: solid 2px black;


    }

    button {
        margin-top: 2vh;
        font-size: 2rem;
    }

    legend {
        font-size: 2rem;
    }
</style>