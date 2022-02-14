<?php
session_start();
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
    <fieldset>
        <legend>Veux tu savoir les dates precedente et suivante? </legend>
        <form action="controller.php" method="post">

            <label for="">Entrez le jour</label>
            <input type="text" name="jour" value="<?php if (!isset($_SESSION['erreur']['jour']) && isset($_SESSION['post'])) {
                                                        echo $_SESSION['post']['jour'];
                                                    } else {
                                                        echo "";
                                                    } ?>">
            <?php
            if (isset($_SESSION['erreur']['jour'])) {  ?>
                <span> <?php
                        echo $_SESSION['erreur']['jour'];
                        ?> </span>
            <?php
            }
            ?>
            <label for="">Entrez le mois</label>
            <input type="text" name="mois" value="<?php if (!isset($_SESSION['erreur']['mois']) && isset($_SESSION['post'])) {
                                                        echo $_SESSION['post']['mois'];
                                                    } else {
                                                        echo "";
                                                    } ?>">
            <?php
            if (isset($_SESSION['erreur']['mois'])) {  ?>
                <span> <?php
                        echo $_SESSION['erreur']['mois'];
                        ?> </span>
            <?php
            }
            ?>
            <label for="">Entrez l'année</label>
            <input type="text" name="an" value="<?php if (!isset($_SESSION['erreur']['an']) && isset($_SESSION['post'])) {
                                                    echo $_SESSION['post']['an'];
                                                } else {
                                                    echo "";
                                                } ?>">
            <?php
            if (isset($_SESSION['erreur']['an'])) {  ?>
                <span> <?php
                        echo $_SESSION['erreur']['an'];
                        ?> </span>
            <?php
            }
            ?>
            <button type="submit" name="ok">OK</button>
        </form>
    </fieldset>

</body>
<style>
    body {
        background: linear-gradient(pink, 50%, blue);

    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 100px;
        font-size: 30Px;


    }

    input {
        width: 50%;
        height: 70Px;
        border: solid 2px black;
        background: linear-gradient(pink, 25%, blue);



    }

    span {
        color: red;
        font-size: 20px;
    }

    button {
        margin-top: 2vh;
        font-size: 2rem;
    }

    legend {
        font-size: 2rem;
    }
</style>
<?php
if (isset($_SESSION['erreur'])) {
    unset($_SESSION['erreur']);
}
if (isset($_SESSION['post'])) {
    unset($_SESSION['post']);
}

?>

</html>