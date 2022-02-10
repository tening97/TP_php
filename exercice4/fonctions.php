<?php
$num1 = rand(1, 3);
$num2 = rand(2, 4);

function Permutation($num1, $num2)
{
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
    echo "Apres permutation numero1 =" . $num1;
    echo "<br>";
    echo "Apres permutation numero2 =" . $num2;
}
