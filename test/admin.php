<?php
session_start();
if (isset($_SESSION['slt'])) {
    if ($_SESSION['slt'] == "Mbaye") {
        echo 'Bonjour ' . $_SESSION['slt'];
    } else {
        header('location:index.php');
    }
}
