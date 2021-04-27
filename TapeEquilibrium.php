<?php

function tapeEquilibrium($a){  //$a contains the passing array
   $leftSum = $a[0];  //value of the first element assigned to the variable for comparison
   $rightSum = array_sum($a) - $a[0];  //values of all elements excluding the element in index 0
   $diff = abs($leftSum - $rightSum);  //first difference 
   $minimDiff = $diff;   //minimum difference to be further calculated and returned 
   //loop starts at index 1 because of the above assignment
   for($i = 1; $i <= count($a)-1; $i++){
      $leftSum += $a[$i]; //adding values of each element to the right of the array in each iteration
      $rightSum -= $a[$i]; //subtracting the value of each element in the iteration
      $diff = abs($rightSum - $leftSum); //determining the difference of values..
      if($minimDiff > $diff) $minimDiff = $diff; //if new difference smaller than the value in minimumDiff, replace it with new value
   }
   return $minimDiff;  // return the smalled difference value
}

$a = [3, 1, 2, 4, 3];
echo tapeEquilibrium($a);