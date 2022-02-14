<?php
session_start();
?>
<legend>Combien de champs input desirez-vous?</legend>
<form action="controller.php" method="POST">
    <label for="num"> Entrez un nombre</label>
    <input type="text" id="num" name="num">
    <?php if (isset($_SESSION['erreur'])) { ?>
        <span>
        <?php
        echo $_SESSION['erreur']['num'];
          } ?>
        </span>


        <input type="submit" value="Génerer" name="ok">

</form>
<?php
if (isset($_SESSION['erreur'])) {
    unset($_SESSION['erreur']);
}
?>
