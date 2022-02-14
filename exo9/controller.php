<?php
session_start();
include("../exercice6/fonctions.php");

if (isset($_POST['ok'])) {
    $num=$_POST['num'];
    $erreur = [];
    validNombre($num, "num", $erreur);
    if (count($erreur) == 0) {
        echo"La table de multiplication de $num est <br>";
        for ($i = 1; $i <= 10; $i++) {
            $multi = $num * $i;
            echo "$num * $i= $multi <br>";
        }
    }
    else {
        $_SESSION['erreur']=$erreur;
        header("location:index.php");
    }   
}   
else {
    header("location:index.php");
}
?>
<h2><a href="index.php">Essayer encore</a></h2>
<h2><a href="../exo10/index.php">Voire l'exercice 10</a></h2>