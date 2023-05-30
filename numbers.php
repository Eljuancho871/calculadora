<?php 


$array_nums_form = [];

for ($i=0; $i < 10 ; $i++) { 

    $content = "<form class='form_numbers' method='post' action='./show_caracteres.php' >
                    <input name='number' type='submit' value='".$i."' />
                </form>";
    array_push($array_nums_form, $content);
}
?>