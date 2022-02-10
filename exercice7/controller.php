<?php
require "fonctions.php";
@$an = $_POST['an'];
@$mois = $_POST['mois'];
@$jour = $_POST['jour'];
@$ok = $_POST['ok'];

if (isset($ok)) {
    echo dateSuivante($jour, $mois, $an);
    echo datePrecedente($jour, $mois, $an);
}
