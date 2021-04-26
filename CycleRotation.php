<?php

function arrayRotation($arr, $val){

   do{
      array_push($arr, array_shift($arr));
      $val--;
   } while ($val > 0);

   return $arr;
}
$anArray= [1,2,3,4,5];
$res = arrayRotation($anArray, 3);

print_r($res);