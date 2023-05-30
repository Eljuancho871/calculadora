<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="show_numbers" >
        <?php  echo $_SESSION["caracteres"];  ?>
    </div>
    <div class="content_number">
    <?php 
    
    require_once "./numbers.php";

    if(isset($array_nums_form)){

        for ($i=0; $i < 10; $i++) { 

            echo $array_nums_form[$i];
        }
    }
    
    ?>
    </div>
</body>
</html>