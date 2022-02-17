<?php
session_start();
include("../exercice6/fonctions.php");

if (isset($_POST['ok'])) {
    $num = $_POST['num'];
    $erreur = [];
    validNombre($num, "num", $erreur);
    if (count($erreur) == 0) {
        echo "  <h2> La table de multiplication de $num est  <h2><br>";
        for ($i = 1; $i <= 10; $i++) {
            $multi = $num * $i;
?>
            <h2><?php echo "$num * $i= $multi" ?></h2>

<?php
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
<h2><a href="../exo10/index.php">Voire l'exercice 10</a></h2>