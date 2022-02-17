<?php
session_start();
?>
<form action="controller.php" method="post">
    <legend>Entrez des numeros de telephones svp</legend>
    <textarea name="num" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Verifiez" name="ok">
</form>