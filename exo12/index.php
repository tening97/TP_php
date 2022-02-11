<?php
session_start();

?>
<div>
    <form action="controller.php" method="post">
        <legend>
            <h2> cliquer sur Français ou English pour voir les mois</h2>
        </legend>
        <input type="submit" value="Français" name="okf">
        <input type="submit" value="Engish" name="oke">
    </form>
    <table>
        <?php
        if (isset($_SESSION['okf'])) {
        ?>
            <tr>
                <?php
                if (isset($_SESSION['tabFr'])) {
                    for ($i = 0; $i < count($_SESSION['tabFr']); $i += 3) {
                ?>
                        <td> <?php echo $_SESSION['tabFr'][$i];
                            }
                                ?></td>
            </tr>
            <tr>
                <?php
                    for ($i = 1; $i < count($_SESSION['tabFr']); $i += 3) {
                ?>
                    <td> <?php echo $_SESSION['tabFr'][$i];
                        }
                            ?></td>
            </tr>
            <tr>
                <?php
                    for ($i = 2; $i < count($_SESSION['tabFr']); $i += 3) {
                ?>
                    <td> <?php echo $_SESSION['tabFr'][$i];
                        }
                            ?></td>
            </tr>



    <?php
                }
            }
    ?>
    </table>
    <table>
        <?php
        if (isset($_SESSION['oke'])) {
        ?>
            <tr>
                <?php
                if (isset($_SESSION['tabEn'])) {
                    for ($i = 0; $i < count($_SESSION['tabEn']); $i += 3) {
                ?>
                        <td> <?php echo $_SESSION['tabEn'][$i];
                            }
                                ?></td>
            </tr>
            <tr>
                <?php
                    for ($i = 1; $i < count($_SESSION['tabEn']); $i += 3) {
                ?>
                    <td> <?php echo $_SESSION['tabEn'][$i];
                        }
                            ?></td>
            </tr>
            <tr>
                <?php
                    for ($i = 2; $i < count($_SESSION['tabEn']); $i += 3) {
                ?>
                    <td> <?php echo $_SESSION['tabEn'][$i];
                        }
                            ?></td>
            </tr>



    <?php
                }
            }
    ?>
    </table>
</div>
<style>
    table {
        margin: 20px;
        font-size: 2rem;

    }

    textarea,
    td {
        border: 1px solid black;
        padding: 10px;
    }

    div {
        display: flex;
        flex-direction: column;
        align-content: center;
    }
</style>
<?php

if (isset($_SESSION['tabFr'])) {
    unset($_SESSION['tabFr']);
}
if (isset($_SESSION['tabEn'])) {
    unset($_SESSION['tabEn']);
}

?>