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