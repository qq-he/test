<?php  
    $name="Cat";  
    ${$name}="Dog";  // => $Cat = "Dog"
    ${${$name}}="Monkey";  // => $Cat = "Monkey"
    echo $name. "<br>";  
    echo ${$name}. "<br>";  
    echo $Cat. "<br>";  
    echo ${${$name}}. "<br>";  
    echo $Dog. "<br>";  
?>