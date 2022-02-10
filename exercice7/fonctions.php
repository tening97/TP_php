<?php
function anneeBis($a): bool
{
    $resultat = false;
    if (($a % 4 == 0 && $a % 100 != 0) || $a % 400 == 0) {
        $resultat = true;
    }
    return $resultat;
}
function nombreJour($a, $m)


{
    if ($m > 0  && $m <= 12 && $a > 0) {
        if ($m == 2) {
            if (anneeBis($a)) {
                $n = 29;
            } else {
                $n = 28;
            }
        } elseif ($m == 4 || $m == 6 || $m == 9 || $m == 11) {
            $n = 30;
        } else {
            $n = 31;
        }
    }
    return $n;
}
function dateValide($j, $m, $a): bool
{
    $resultat = false;
    if ($j > 0 && $j <= nombreJour($a, $m) && ($m > 0  && $m <= 12)) {
        $resultat = true;
    }
    return $resultat;
}
function dateSuivante($j, $m, $a)
{
    if (dateValide($j, $m, $a)) {
        if ($j < nombreJOur($a, $m)) {
            $j = $j + 1;
        } elseif ($j == nombreJour($a, $m)) {
            if ($m == 12) {
                $j = 1;
                $m = 1;
                $a = $a + 1;
            } else {
                $j = 1;
                $m = $m + 1;
                $a = $a;
            }
        }
        echo "La date suivante  $j   $m   $a";
    } else {
        echo "Date incorrecte";
    }
}
function datePrecedente($j, $m, $a)
{
    if ($j <= nombreJour($a, $m)) {
        $j = $j - 1;
        $m = $m;
        $a = $a;
    }
    echo " La date precedente est $j  $m $a ";
}
