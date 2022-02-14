<?php
session_start();
include "../exercice6/fonctions.php";
if (isset($_POST['ok'])) {
    $num = $_POST['num'];
    $erreur = [];
    validNombre($num, "num", $erreur);
    if (count($erreur) == 0) {
        for ($i = 1; $i <= $_POST['num']; $i++) {
            echo "<input/> <br> <br>";
        }
    } else {
        $_SESSION['erreur'] = $erreur;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}
?>
<h2><a href="index.php">Essayer encore</a></h2>
<h2><a href="../exo11/index.php">Voire l'exercice 11</a></h2>