<?php

function frogRiverOne($a, $x){
   $seconds = 0;
   foreach($a as $key => $value){
      if($value == $x){
         $seconds = $key; 
         break;
      }     
   }   
   if($seconds > 0) return $seconds;
   return -1;
}

$arr = [1, 3, 1, 4, 2, 3, 5, 4];
echo frogRiverOne($arr, 5);

//The assumption is that the array is sorted and elements are stored from index 0 onwards..