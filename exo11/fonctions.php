<?php
function nombrePremier($n): bool
{
    $d = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $d = $d + 1;
        }
    }
    if ($d == 2) {
        $resultat = true;
    } else {
        $resultat = false;
    }
    return $resultat;
}

function moyenne(array $tab)

{
    return array_sum($tab) / count($tab);
}
function tabPremier($num, array $tab)
{
    for ($i = 1; $i <= $num; $i++) {
        if (nombrePremier($i)) {
            array_push($tab, $i);
        }
    }
    return $tab;
}
