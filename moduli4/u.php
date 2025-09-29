<?php
   function Helloworld(){
    echo "Hello world";
   }
   Helloworld();

   echo "<br>";

   function sum(){
    $valeu = 120 + 20;
    echo($valeu);
   }
   sum();

   echo "<br>";

   function maximum($x , $y){
    if($x > $y){
        return $x;
    }
    else{
        return $y;
    }

   }
    $a = 20;
    $b = 30;
    $test = maximum($a , $b);
        echo "The max of $a dhe $b is $test";
    
    
    


?>