<?php session_start();   ?>


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
    <div style="display: flex;">
        <div class="content_number">
        <?php 
        
        require_once "./numbers.php";

        if(isset($array_nums_form)){

            for ($i=0; $i < 10; $i++) { 

                echo $array_nums_form[$i];
            }
        }
        
        ?>

            <form class='' method='post' action='./show_caracteres.php' style="width: 100%;" >
                <input name='caracter' type='submit' value='(' style="width: 100%;"/>
            </form>
            
            <form class='' method='post' action='./show_caracteres.php' style="width: 100%;" >
                <input name='caracter' type='submit' value=')' style="width: 100%;" />
            </form>

            <form class='' method='post' action='./operaciones.php' style="width: 100%;" >
                <input name='borrar' type='submit' value='BORRAR' style="width: 100%;" />
            </form>
            
            <form class='' method='post' action='./operaciones.php' style="width: 100%;" >
                <input name='calculo' type='submit' value='=' style="width: 100%;" />
            </form>

        </div>
        <div>
            <form class='operaciones' method='post' action='./show_caracteres.php' >
                <input name='caracter' type='submit' value='+' />
            </form>

            <form class='operaciones' method='post' action='./show_caracteres.php' >
                <input name='caracter' type='submit' value='-' />
            </form>

            <form class='operaciones' method='post' action='./show_caracteres.php' >
                <input name='caracter' type='submit' value='*' />
            </form>

            <form class='operaciones' method='post' action='./show_caracteres.php' >
                <input name='caracter' type='submit' value='/' />
            </form>

            <form class='operaciones' method='post' action='./show_caracteres.php' >
                <input name='caracter' type='submit' value='%' />
            </form>
        </div>
    </div>
</body>
</html>