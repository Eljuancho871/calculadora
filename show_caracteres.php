<?php

session_start();

if(isset($_POST)){

    $_SESSION["caracteres"] =  $_SESSION["caracteres"]." ".$_POST["caracter"];
}

$page = $_SERVER['HTTP_REFERER'];
$sec = "0";
header("Refresh: $sec; url=$page");


?>