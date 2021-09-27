<?php

function check($number){
    if($number % 2 == 0){
        echo "Even"; 
        echo "<br>";
    }
    else{
        echo "Odd";
         echo "<br>";
    }
}

$number = 11;
check($number)

?>