<?php

function permutation($str,$prefix=""){
//base case to print the prefix  and different set of combinations
 if(strlen($str)===0){
    echo $prefix."\t";
 }
 else{
     $len=strlen($str);
    for($i=0;$i<$len;$i++){
        //store the prefix inside the newPrefix
       $newPrefix=$prefix.$str[$i];
       //find different sets of strings and there combinations
       $newRemaining=substr($str,0,$i).substr($str,$i+1);
       permutation($newRemaining,$newPrefix);
    }
 }
}
$str="ABC";

echo permutation($str);


?>