<?php

// function Valide($nbr)
// {
//     if (empty($nbr) && !is_numeric($nbr)) {
//     }
// }
function equation($a, $b, $c)
{
    $delta = pow($b, 2) - 4 * $a * $c;
    if ($delta > 0) {
        echo " <legend>L'equation admet deux solutions x1 =" . $x1 = (-1 * $b - sqrt($delta)) / 2 * $a . "et x2 =<legend>" . $x1 = (-1 * $b + sqrt($delta)) / 2 * $a;
    } elseif ($delta < 0) {
        echo "<legend>L'equation n'admet pas de solution </legend>";
    } else {
        echo " <legend>l'equation admet une seule solution x0= </legend>" . $x0 = -1 * $b / 2 * $a;
    }
}
