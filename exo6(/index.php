<?php
session_start();
?>
<form action="controller.php" method="post">
  <label for="">Entrer a</label>
  <input type="text" name="a" id="" value="<?php if (!isset($_SESSION['error']['a']) && isset($_SESSION['post'])) echo  $_SESSION['post']['a'];
                                            else ''  ?>">
  <?php if (isset($_SESSION['error']['a'])) : ?>
    <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
  <?php endif ?>
  <br>
  <label for="">Entrer b</label>
  <input type="text" name="b" id="" value="<?php if (!isset($_SESSION['error']['b']) && isset($_SESSION['post'])) echo  $_SESSION['post']['b'];
                                            else ''  ?>">
  <?php if (isset($_SESSION['error']['b'])) : ?>
    <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
  <?php endif ?>
  <br>
  <label for="">Entrer c</label>
  <input type="text" name="c" id="" value="<?php if (!isset($_SESSION['error']['c']) && isset($_SESSION['post'])) echo  $_SESSION['post']['c'];
                                            else ''  ?>">
  <?php if (isset($_SESSION['error']['c'])) : ?>
    <span style="color:red"><?php echo $_SESSION['error']['c'] ?></span>
  <?php endif ?>
  <br>

  <input type="submit" name="btn_ok" id="" value="ok">


</form>

<?php
if (isset($_SESSION['error'])) {
  unset($_SESSION['error']);
}

?>