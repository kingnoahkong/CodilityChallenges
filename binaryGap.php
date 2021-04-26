<?php

function BinaryGap($param){
   
   //check if param is smaller than 2, if so, it can only be a maximum of 1 so no zeros..
   if($param < 2 ) return 0; 
   
   //setting counter for the zeros and the maximum length to start with 0. 
   $max=0; $counter=0; 
   
   //the loop to go through the parametr and divide it each time.. 
   while ($param> 0){
      if($param % 2 !=1){
         $counter++;
      } else {
         if($counter > $max){  //when the binary bit not 0 check if counter is larger than max!!
            $max = $counter;   //set max to copy the counter value
         }
      $counter = 0;  //reset counter back to zero
      }
      $param /=2;   //divide the remaining sum by two..
   }
   return $max;   // return the maximum length of non set binary bits.. 
   }

   echo BinaryGap(32);