<?php

//function with the array param to be passed when run called $A
function findMissingNum($A){
//start of the loop value is 1
   $missingNum = 1;

   while (in_array($missingNum, $A)) {
      $missingNum++; 
   }
   return $missingNum;
}

$a = [5, 3, 1, 2];
echo findMissingNum($a);

//second variation using simple calculations and array_sum();
function alternativeFunc($a){
   $b = (count($a) +1) * (count($a)+2) / 2;
   $c = $b- array_sum($a);

   return $c;

}

echo alternativeFunc($a);
