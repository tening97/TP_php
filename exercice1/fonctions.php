<?php
$carre = rand(0, 3);
function Perimetre($carre)
{
    $perimetre = $carre * 4;
    return $perimetre;
}
function Surface($carre)
{
    $surface = $carre * $carre;
    return $surface;
}
function Diagonale($carre)
{
    $diagonale = $carre * sqrt(2);
    return $diagonale;
}
