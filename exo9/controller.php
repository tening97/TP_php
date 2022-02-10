<?php
@$num = $_POST['num'];
@$ok = $_POST['ok'];
if (isset($ok)) {
    if (is_numeric($num) && $num > 0) {
        for ($i = 1; $i <= 10; $i++) {
            $multi = $num * $i;
            echo "$num * $i= $multi <br>";
        }
    }
    else {
        echo "Veuillez entrez une valeur positive";
    }
}
