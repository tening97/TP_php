<?php
session_start();

if (isset($_POST['btn'])) {
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    $_SESSION['login'] = $login;
    $_SESSION['pwd'] = $pwd;
    if ($login == "tening" && $pwd == "admin") {
        echo 'vous êtes admin de cette page';
    } else {
        header('location:index.php')
?>
        <a href="resultat.php">Bonjour</a>
<?php
    }
}
?>