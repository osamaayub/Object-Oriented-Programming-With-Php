<?php

//optimize fibonacci sequence using memoization
function fibonacciSequence($num,&$cache=[]){
 //base case
 if($num<=1){
    return $num;
 }
 //if there is no number present in the cache add it into the global cache
 if(!isset($cache[$num])){
   $cache[$num]=fibonacciSequence($num-1,$cache)+ fibonacciSequence($num-2,$cache);
 }
 return $cache[$num];
}
//call the function
echo fibonacciSequence(6);

?>