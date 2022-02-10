<?php

require("fonctions.php");
@$a = $_POST['a'];
@$b = $_POST['b'];
@$c = $_POST['c'];
@$d = $_POST['ok'];
$e = "";
if (isset($d)) {
    if (empty($a)) {
        $e = "Veuillez entrez une valeur";
    }
}

if (!empty($a) || ($a == 0)  && !empty($b) || ($b == 0) && !empty($c) || ($c == 0)) {

    if (is_numeric($a)  && is_numeric($b) && is_numeric($c)) {

        echo equation($a, $b, $c);
    }
} else {
    header("location:index.php");
}
