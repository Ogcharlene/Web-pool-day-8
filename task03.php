<?php

function get_shortest ( array $array) { 
    $short_str = $array[0]; //short_str = le premier index (élément) de mon array
foreach ($array as $str2){ //pr chaque élément du array = (devient) str2 -> on parcourt chaque élément de mon array grâce à la boucle forEACH 
    if (strlen($str2) < strlen($short_str)){ // si la longueur de str2 (chaque élément du tableau en boucle foreach) est inférieur à la longueur de short_str (le premier élément de mon array)
        $short_str = $str2; //le premier élément de mon array devient str2 (car il devient le plus court)
    }
   
} 
 return $short_str;
}