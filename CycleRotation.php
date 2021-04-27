<?php
//100% all tests were positive.
function solution($A, $K)
{
   // write your code in PHP7.0
   if(empty($A) || $K == 0) return $A;
   while ($K > 0) {
      array_unshift($A, array_pop($A));
      $K--;
   }
   return $A;
}
