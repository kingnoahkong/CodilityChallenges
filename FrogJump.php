<?php

//variation one with a while loop..
function frogJump($x, $y, $d){
   $result = 0;

   while($x<=$y){
      $x +=$d;
      $result++;
   }
   return $result;
}

echo frogJump(10, 85, 30);

//variation two with just an if statement

function secondFrogJump($x, $y, $d){
   $result = 0;
   if($x < $y){
      $result = (int)ceil(($y - $x) / $d); // with ceil I round up the decimal to whole number.. 
   }
   return (int) $result;
}

echo secondFrogJump(10, 85, 30);