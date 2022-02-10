<?php 
@$num=$_POST['num'];
@$ok=$_POST['ok'];
if (isset($ok)) {
    if (is_numeric($num) && $num >= 0) {
        for ($i = 1; $i <=$num; $i++) {
            
            echo "<li> $i</li>" ;
        }
    }
    else {
        echo "Veuillez entrez une valeur positive";
    }
}
