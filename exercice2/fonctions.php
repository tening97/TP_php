<?php

$long = rand(1, 12);
$largeur = rand(1, $long - 1);

function Perimetre($largeur, $long)
{
    // while ($largeur < $long) {
    $perimetre = ($largeur + $long) * 2;
    return $perimetre;
    //}
}
function Surface($largeur, $long)
{
    //while ($largeur < $long) {
    $surface = $long * $largeur;
    return $surface;
    //}
}
function Diagonale($largeur, $long)
{
    //while ($largeur < $long) {
    $diagonale = sqrt(pow($largeur,2)  + pow($long,2));
    return $diagonale;
    //}
}
