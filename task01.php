<?php
 function discover_type($age, $name, $gpa, $isStudent){

    if ($isStudent == true){ //si isStudent est true
        echo "Hello my name is ", $name, " I'm ", $age, " years old. 
        I'm a student at Epitech with GPA of ", $gpa, " ."  . PHP_EOL;
    } else { //Si c'est pas le cas 
        echo "Hello my name is ", $name, "I'm ", $age, " years old. I'm not a student"  . PHP_EOL;
    };
    
 };

 //discover_type(28, "Charlène", 12.5, true); //on precise les paramètre à l'appel de la fonction 
   // discover_type(31, "Gladys", 0, false);

?>