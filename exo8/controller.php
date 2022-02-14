<?php
session_start();
require("../exercice6/fonctions.php");
if (isset($_POST['ok'])) {
    $num = $_POST['num'];
    $erreur = [];
    validNombre($num, "num", $erreur);
    if (count($erreur) == 0) {
        for ($i = 1; $i <= $num; $i++) {

           echo "<h2> <li> $i</li></h2>";
        }
    } else {
        $_SESSION['erreur'] = $erreur;
        header("location:index.php");
    }
} else {
    header("location:index.php");
}
$_SESSION['num'] = $num;



if (isset($_SESSION['num'])) {
    unset($_SESSION['num']);
}
?>
<h2><a href="index.php">Essayer encore</a></h2>
<h2><a href="../exo9/index.php">Voire l'exercice 9</a></h2>