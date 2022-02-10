<?php
include "fonctions.php";
echo $long;
echo "<br>";
echo $largeur;
echo "<br>";

echo "Le perimetre du rectangle est " . Perimetre($largeur, $long);
echo "<br>";
echo "La surface du rectangle est " . Surface($largeur, $long);
echo "<br>";
echo "La diagonale du rectangle est " . Diagonale($largeur, $long);
