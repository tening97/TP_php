<?php
session_start();
// if (isset($_SESSION['tab'])) {
// }
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
    <form action="controller.php" method="POST">
        <input type="text" name="num">
        <input type="submit" name="ok" value="OK">
    </form>

    <table>
        <tr>
            <td>Nombre premier</td>
            <td>Nombre inferieur à la moyenne</td>
            <td>Nombre superieur à la moyenne</td>
        </tr>
        <h2><a href="index.php">Essayer encore</a></h2>
        <h2><a href="../exo12/index.php">Voire l'exercice 12</a></h2>
        <?php
        if (isset($_SESSION['tab'])) {
            if (empty($_SESSION['erreur'])) {
                for ($i = 0; $i < count($_SESSION['tab']); $i++) { ?>

                    <tr>
                        <td>
                            <?php
                            echo $_SESSION['tab'][$i];
                            ?>
                        </td>

                        <?php
                        if ($i < count($_SESSION['tabI'])) {
                            echo " <td>" . $_SESSION['tabI'][$i] . "</td>";
                        }

                        ?>


                    <?php
                    if ($i < count($_SESSION['tabS'])) {
                        echo " <td>" . $_SESSION['tabS'][$i] . "</td>";
                    }
                }

                    ?>
                    </tr>
            <?php } else {
                echo $_SESSION['erreur'];
            }
        } ?>




    </table>

</body>

</html>
<?php

if (isset($_SESSION['tab'])) {
    unset($_SESSION['tab']);
}
if (isset($_SESSION['tabI'])) {
    unset($_SESSION['tabI']);
}
if (isset($_SESSION['tabS'])) {
    unset($_SESSION['tabS']);
}
?>
<style>
    table {
        margin: 20px;
        font-size: 2rem;

    }

    textarea,
    td {
        border: 1px solid black;
        padding: 10px;
    }
</style>