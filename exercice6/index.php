<?php
session_start();
?>
<form action="controller.php" method="POST">
    <fieldset>
        <legend> Resoudre une equation du second degre</legend>
        <div class="forme">
            <label for="a">Entrez a</label>
            <input type="text" name="a" id="a" placeholder="Entrez une valeur pour a" value="<?php if (!isset($_SESSION['error']['a']) && isset($_SESSION['post'])) echo  $_SESSION['post']['a'];
                                                                                                else ''  ?>">
            <?php if (isset($_SESSION['error']['a'])) : ?>
                <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
            <?php endif ?>

            <label for="b">Entrez b</label>
            <input type="text" name="b" id="b" placeholder="Entrez une valeur pour b" value="<?php if (!isset($_SESSION['error']['b']) && isset($_SESSION['post'])) echo  $_SESSION['post']['b'];
                                                                                                else ''  ?>">
            <?php if (isset($_SESSION['error']['b'])) : ?>
                <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
            <?php endif ?>
            <label for="c">Entrez c</label>
            <input type="text" name="c" id="c" placeholder="Entrez une valeur pour c" value="<?php if (!isset($_SESSION['error']['c']) && isset($_SESSION['post'])) echo  $_SESSION['post']['c'];
                                                                                                else ''  ?>">
            <?php if (isset($_SESSION['error']['c'])) : ?>
                <span style="color:red"><?php echo $_SESSION['error']['c'] ?></span>
            <?php endif ?>
           <button type="submit" value="" name="ok">Envoyer</button>
            
    </fieldset>

</form>

</div>
<?php
if (isset($_SESSION['error'])) {
  unset($_SESSION['error']);
}

?>

<style>
    body {
        background-image: url(img1.jpeg);
        background-repeat: no-repeat;
    }

    .forme {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 100px;
        border-color: solid 2px red;
        font-size: 40Px;
        background-color: slategrey;


    }

    input {
        width: 80%;
        height: 70Px;
        border: solid 2px black;


    }

    button {
        margin-top: 2vh;
        font-size: 2rem;
    }

    legend {
        font-size: 2rem;
    }
</style>