<?php


//integer to roman numeral conversion

function RomanToIntConversion($num){
    $map=[
        1000=>'M',900=>'CM',500=>'D',400=>'CD',
       100=>'C',90=>'XC',50=>'L',40=>'XL', 
      10=>'X',9=>'IX',8=>'VIII',7=>'VII',6=>'VI',5=>'V',4=>'IV',3=>"III",2=>'II',1=>'I'
    ];
   
    $result="";
 
    foreach($map as $value=>$roman){
        //if the maximum value is greater than
        while($num>=$value){
          //append the result if its value is not 4 or 9
          $result.=$roman;
    
        //select the maximum value from the input to convert into roman
        $num-=$value;

        }
    }
    return $result;
}
echo RomanToIntConversion(1994);



?>