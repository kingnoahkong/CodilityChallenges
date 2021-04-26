<?php

function oddOccurance($a){
   $result = 0;  //variable to store and return unpairable number

   foreach($a as $key => $value){
      $result ^= $value;  //using XOR to determine the unpairable elemetn in the array
   }
   return $result;
}
$anArray = [9, 7, 9, 3, 9, 3, 9];  //test array
echo oddOccurance($anArray);