
<?php
session_start();
require("fonctions.php");
$ok = $_POST['ok'];
$num = $_POST['num'];
$tab = [];
$tabI = [];
$tabS = [];

if (isset($ok)) {
    if (is_numeric($num)) {
        if ($num > 10000) {
            for ($i = 1; $i <= $num; $i++) {
                if (nombrePremier($i)) {
                    array_push($tab, $i);
                }
            }
            for ($i = 1; $i < count($tab); $i++) {
                if ($tab[$i] < moyenne($tab)) {
                    array_push($tabI, $tab[$i]);
                } else {
                    array_push($tabS, $tab[$i]);
                }
            }
        } else {
            $erreur = "VEUILLEZ ENTREZ UN NOMBRE SUPERIEUR A 1000";
        }
    } else {
        $erreur = "Veuillez entrez un nombre";
    }
    // tabPremier($_SESSION['num'], $tab);


    $_SESSION['tab'] = $tab;
    $_SESSION['tabI'] = $tabI;
    $_SESSION['tabS'] = $tabS;
    $_SESSION['erreur'] = $erreur;

    header("location:index.php");
}
?>