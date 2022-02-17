<?php

function numValide(string $num, array &$tab, array &$tab2)
{

    if (strlen(trim($num)) == "9") {
        if (is_numeric($num) && strpos($num, "77") === 0 || strpos($num, "76") === 0 || strpos($num, "70") === 0 || strpos($num, "78") === 0 || strpos($num, "75") === 0) {
            array_push($tab,  substr($num, 0, 9));
        } else {
            array_push($tab2, substr($num, 0, 9));
        }
    } else {
        array_push($tab2, $num);
    }
}




$string = "hello world hello tening";
$tab = explode("\n", $string);
$tabnumb = [1, 2, 3, 4];
// function cub($n): int
// {
//     return pow($n, 3);
// }

// $bontableau = array_map("cub", $tabnumb);

// print_r($bontableau);
