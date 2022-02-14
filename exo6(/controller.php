<?php 
include_once("fonctions.php");

  session_start();
if(isset($_POST['btn_ok'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validNombre($a,"a",$arrError);
    validNombre($b,"b",$arrError);
    validNombre($c,"c",$arrError);
    if(count($arrError)==0){
        equationSecondDegre($a,$b,$c);
    }else{
        $_SESSION['error']=$arrError;
        //var_dump( $_SESSION);
        header('location:index.php'); 
        exit();
    }
}else{
    //Redirection
    header('location:index.php');
    exit();
}

if(isset($_SESSION['post'])){
    unset($_SESSION['post']);
}