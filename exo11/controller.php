<?php
session_start();
require("fonctions.php");
$ok = $_POST['ok'];
$num = $_POST['num'];
$_SESSION['ok'] = $ok;
$_SESSION['num'] = $num;
$tab=[];
if (isset($_SESSION['ok'])) {
    for ($i = 1; $i <= $_SESSION['num']; $i++) {
        if (nombrePremier($i)) {
            array_push($tab, $i);
        }
        
    }
    print_r($tab);
    echo "<br>".moyenne($tab);
}
?>
<table>
    
</table>

