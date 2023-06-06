<?php 

session_start();

if (isset($_POST["borrar"])){

    $array_caracteres = explode(" ", $_SESSION["caracteres"]);
    array_pop($array_caracteres);
    $_SESSION["caracteres"] = implode(" ", $array_caracteres);
};

if (isset($_POST["calculo"])){

    $caracteres = implode("", explode(" ", $_SESSION["caracteres"]));
    recursive_operacion($caracteres);
};

global $d;
$d = 0;

function recursive_operacion(string $caracteres){

    global $d;
    $array_caracteres = str_split($caracteres);
    $symbol_operacion = ["", 0];
    $nums_left = [];
    $nums_right = [];
    $d += 1;
    
    foreach($array_caracteres as $key => $value){

        if($symbol_operacion[1] === 0){
            
            if($value != "+" && $value != "-" && $value != "*" && $value != "/") array_push($nums_left, $value);
        }

        if($symbol_operacion[1] === 1){
            
            if($value != "+" && $value != "-" && $value != "*" && $value != "/") array_push($nums_right, $value);
        }

        if($value === "+" || $value === "-" || $value === "*" || $value === "/"){

            $symbol_operacion[1] += 1;
            if($symbol_operacion[1] >= 2) break;
            $symbol_operacion[0] = $value;
        }
    };

    $_SESSION["caracteres"] = $caracteres;
    echo $caracteres;
    echo "<br/>";

    

    if($d < 5) calculo_operacion($symbol_operacion[0], $nums_left, $nums_right, $caracteres);
};

function es_entero($cadena) {
    return preg_match('/^[0-9]+$/', $cadena);
}

function join_new_operacion($caracteres_old, $result_new){

    $caracteres_old_array = str_split($caracteres_old);
    $count_symbol = 0;
    $new_operacion = "";

    foreach($caracteres_old_array as $key => $value){

        if($value == "+" || $value == "-" || $value == "*" || $value == "/") $count_symbol += 1;
        if($count_symbol >= 2) $new_operacion = $new_operacion.$value;
    }

    $new_operacion_array = str_split($new_operacion);
    array_unshift($new_operacion_array, $result_new);
    $result_final = implode("", $new_operacion_array);

    recursive_operacion($result_final);

}

function calculo_operacion($symbol_operacion, $nums_left, $nums_right, $old_caracteres){

    $result = 0;
    $nums_left = implode("", $nums_left);
    $nums_right = implode("", $nums_right);

    switch ($symbol_operacion) {
        case '+':
            
            $result = intval($nums_left) + intval($nums_right);
            break;
        case '-':
            
            $result = intval($nums_left) - intval($nums_right);
            break;

        case '*':
            
            $result = intval($nums_left) * intval($nums_right);
            break;

        case '/':
            
            $result = intval($nums_left) / intval($nums_right);
            break;
    }

    join_new_operacion($old_caracteres, $result);
};

//  $page = $_SERVER['HTTP_REFERER'];
//  $sec = "0";
//  header("Refresh: $sec; url=$page");
?>