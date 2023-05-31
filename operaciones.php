<?php 

session_start();

if (isset($_POST["borrar"])){

    $array_caracteres = explode(" ", $_SESSION["caracteres"]);
    array_pop($array_caracteres);
    $_SESSION["caracteres"] = implode(" ", $array_caracteres);
}

if (isset($_POST["calculo"])){

    $caracteres = implode("", explode(" ", $_SESSION["caracteres"]));
    $result = eval("return $caracteres;");
    $_SESSION["caracteres"] = $result;
}



$page = $_SERVER['HTTP_REFERER'];
$sec = "0";
header("Refresh: $sec; url=$page");
?>