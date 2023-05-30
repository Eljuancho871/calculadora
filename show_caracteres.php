<?php

session_start();

if(isset($_POST)){

    // array_push($caracteres, $_POST["number"]);
    $_SESSION["caracteres"] = $_POST["number"];
}


header("location: http://localhost/SpUkT01-091/calculadora/index.php");
// $page = $_SERVER['HTTP_REFERER'];
// $sec = "1";
// header("Refresh: $sec; url=$page");


?>