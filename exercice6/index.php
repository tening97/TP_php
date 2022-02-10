<form action="" method="POST">
    <fieldset>
        <legend> Resoudre une equation du second degre</legend>
        <div class="forme">
            <label for="a">Entrez a</label>
            <input type="text" name="a" id="a" placeholder="Entrez une valeur pour a">
            <span><?php if (isset($_POST['ok'])) {
                        if (empty($_POST['a'])) {
                            echo "Veuillez saisir une valeur";
                        }
                    } ?></span>

            <label for="b">Entrez b</label>
            <input type="text" name="b" id="b" placeholder="Entrez une valeur pour b">
            <span><?php if (isset($_POST['ok'])) {
                        if (empty($_POST['b'])) {
                            echo "Veuillez saisir une valeur";
                        }
                    } ?></span>
            <label for="c">Entrez c</label>
            <input type="text" name="c" id="c" placeholder="Entrez une valeur pour c">
            <span><?php if (isset($_POST['ok'])) {
                        if (empty($_POST['c'])) {
                            echo "Veuillez saisir une valeur";
                        }
                    } ?></span>
            <button type="submit" value="Envoyer" name="ok">Envoyer</button>
    </fieldset>

    <?php require 'controller.php';


    ?>

</form>
</div>
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