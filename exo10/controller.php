<?php

if (isset($_POST['ok'])) {
    if (is_numeric($_POST['num'])) {
        for ($i = 1; $i <= $_POST['num']; $i++) {
            echo "<input/> <br> <br>";
        }
    }
}

