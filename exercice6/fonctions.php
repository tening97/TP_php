<?php


function validNombre($nbre, string $key, array &$arrError): void
{
    if (empty($nbre)  && ($nbre != 0)) {
        $arrError[$key] = "Veullez saisir une valeur";
    } else {
        if (!is_numeric($nbre)) {
            $arrError[$key] = "Veullez saisir un nombre";
        }
    }
}

function equationSecondDegre($a, $b, $c)
{
    
    $delta = pow($b, 2) - 4 * $a * $c;
    if ($delta > 0) {
        echo " L'equation admet deux solutions x1 =" . $x1 = (-1 * $b - sqrt($delta)) / 2 * $a . "et x2 =" . $x1 = (-1 * $b + sqrt($delta)) / 2 * $a;
    } elseif ($delta < 0) {
        echo "L'equation n'admet pas de solution ";
    } else {
        echo " l'equation admet une seule solution x0= " . $x0 = -1 * $b / 2 * $a;
    }
}
