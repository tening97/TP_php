<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="controller.php" method="post">
        <input type="text" name="login">
        <input type="text" name="pwd">
        <span> <?php
                if ($_SESSION) {
                    if ($_SESSION['login'] != "tening" || $_SESSION['pwd'] != "admin") {
                        echo "erreur";
                    }
                }

                ?> </span>
        <input type="submit" value="Valider" name="btn">
    </form>
</body>
<?php
if ($_SESSION) {
    session_destroy();
}
?>

</html>