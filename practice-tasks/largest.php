<?php


function secondMax($arr){
   $max=$secondMax=PHP_INT_MIN;
  foreach($arr as $num){
    //check if max is greater than first  number add that max to secondMax
    if($num>$max){
      //store the max into secondMax if its found
      $secondMax=$max;

      //find the first max here
      $max=$num;
    }
    //if the max is greater than number and its not equal to firstMax then store the secondMax
    else if($num>$secondMax && $num!=$max){
        $secondMax=$num;
    }
  }
  return $secondMax;
}

$numbers=array(-9,55,67,889,46,1,776);
echo secondMax($numbers);



?>