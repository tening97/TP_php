<?php
session_start();
require "fonctions.php";

if (isset($_POST['ok'])) {
    $an = $_POST['an'];
    $mois = $_POST['mois'];
    $jour = $_POST['jour'];
    $_SESSION['post'] = $_POST;
    $erreur = [];
    validNombre($an, "an", $erreur);
    validNombre($mois, "mois", $erreur);
    validNombre($jour, "jour", $erreur);
    if (count($erreur) == 0) {
?>
        <h2><?php echo dateSuivante($jour, $mois, $an);
            echo "<br>";
            echo datePrecedente($jour, $mois, $an);
            if (isset($_SESSION['post'])) {
                unset($_SESSION['post']);
            }  ?>

            <br><a href="index.php">Essayer encore</a>
            <br><a href="../exo8/index.php">Voir l'exercice8</a>
        </h2>


<?php
    } else {
        $_SESSION['erreur'] = $erreur;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

?>
<style>
    body {

        display: flex;
        background-image: url(img.jpeg);
        background-repeat: no-repeat;
        
        align-items: center;
        justify-content: center;


    }
</style>