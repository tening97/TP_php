<?php
include_once("fonctions.php");

session_start();
if (isset($_POST['ok'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $_SESSION['post'] = $_POST;
    $arrError = [];
    validNombre($a, "a", $arrError);
    validNombre($b, "b", $arrError);
    validNombre($c, "c", $arrError);
    if (count($arrError) == 0) {
        ?>
        <h2>
            <?php
        equationSecondDegre($a, $b, $c);

        if (isset($_SESSION['post'])) {
            unset($_SESSION['post']);
        }
        ?>
       </h2>  <br> <br>
     <h2><br> <a href="index.php">Resoudre une autre</a></h2>

       <h2><a href="../exercice7/index.php">Voire l'exercice 7</a></h2>

<?php
    } else {
        $_SESSION['error'] = $arrError;

        header('location:index.php');
        exit();
    }
} else {
    //Redirection
    header('location:index.php');
    exit();
}
?>
<style>
    body {

        display: flex;
        background-image: url(img.jpeg);
        background-repeat: no-repeat;
        align-items: center;
        justify-content: center;


    }
</style>