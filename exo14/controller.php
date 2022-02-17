<?php
session_start();
include_once("fonctions.php");
$tab1 = [];
if (isset($_POST['ok'])) {

    $num = $_POST['num'];

    $tab1 = explode("\n", $num);
    $tab = [];
    $tab2 = [];

    for ($i = 0; $i < count($tab1); $i++) {

        numValide($tab1[$i], $tab, $tab2);
    }
?> <legend>Numeros valides</legend>
    <textarea name="" id="" cols="30" rows="10" disabled><?php
                                                            foreach ($tab as  $value) {
                                                                echo $value . "\r\n";
                                                            }
                                                            ?>
     </textarea>
    ?> <legend>Numeros Invalides</legend>

    <textarea name="" id="" cols="30" rows="10" disabled><?php
                                                            foreach ($tab2 as  $value) {
                                                                echo $value . "\r\n";
                                                            }
                                                            ?>
     </textarea>
<?php

} else {
    header("location:index.php");
}
?>
<a href="index.php">Reessayer</a>

<a href="../Application/register.html.php">Exercice14</a>