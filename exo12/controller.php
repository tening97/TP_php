<?php
session_start();

$okf = $_POST['okf'];
$oke = $_POST['oke'];
$tabFr = [
    "Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout",
    "Septembre", "Octobre", "Novembre", "Decembre"
];
$tabEn = [
    "January", "February", "March", "April", "May", "June", "July", "August",
    "September", "October", "November", "December"
];

$_SESSION['okf'] = $_POST['okf'];;
$_SESSION['oke'] = $oke;
$_SESSION['tabFr'] = $tabFr;
$_SESSION['tabEn'] = $tabEn;

header("location:index.php");
