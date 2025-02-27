<?php

// $name="osama";



// $address='56 A dha 2';

// $username=null;

// $checkValue=false;

// $phone_number=92;
// $marks=99.67;
// var_dump($name);
// // var_dump($address);
// var_dump($phone_number);
// var_dump($username);
// var_dump($marks);
// var_dump($checkValue);
// 

//Assigning multiple values to a variable

// $name=$first=$second='fruit';
// var_dump($name,$first,$second);


//global scope
$value=5;


// for($x=1;$x<5;$x++){
// //   echo $value;
// //local scope
//   $y+=$x;
// }
// echo $y;

// $y=10;
// $x=5;
// function test(){
//     global $x,$y;
//     $y=$x+$y;
// }
// test();
// echo $y;


//static variables

// function Test(){
//     static $count=0;
//     //  echo $count;
//     $count++;
//     echo $count;
// }
// Test();
// Test();

// $x=5;
// print($x);


//array dataType
// $names=array('ali','orange',5);
// var_dump($names);

//object datatype
// $person=[
//     'name'=>'osama',
//     'age'=>26
// ];
// var_dump($person);


//object Type
//  class Car{
//      public $model;
//      public $color;

//      public function __construct($color,$model) {
//         $this->model=$model;
//          $this->color=$color;
//      }
//      public function showData(){
//        return  "$this->color"."$this->model"|| Car::class;
       
//      }
//  }
  // $Car=new Car('mustang GT','blue');
  // var_dump( $Car->showData());
  // var_dump($Car->showData());
//  var_dump($Car);
 

//change data type
// $x=5;

// $x='osama';
// var_dump($x);

//strings 


// $name='ali';
// $item="pencil";
// var_dump($name,$item);

// echo strlen($name);

// echo str_word_count($name);

// echo strpos("ali",'li');

// echo strtoupper($name);
// echo strtolower($name);


// $name='Hello World';
// echo str_replace("World","Osama",$name);
// echo strrev($name);

// echo trim($name); 


//convert string to array

// print_r( explode(" ",$name));

// $person='ali';
// $lastname='hassan';

// $fullname=$person.$lastname;
// // echo $fullname; 
// echo substr($lastname,3);

//slice from end

// echo substr($lastname,-5,2);


// $x=956;
// $y=98.5;
// var_dump($x,$y);
// $x=5.6;
// var_dump(is_float($x));

// $x=1.44e11;
// var_dump(is_finite($x));
// var_dump(is_infinite($x));


//casting into (int),(float),(string);

$x=5.6;
//convert to int
// $y=(int)$x;
// var_dump($y);


//string to int
// $x='hello';

// $y=(int)$x;
// var_dump($y);

$a=5;

//typecast into string
// var_dump((string)$a);

//typecast into int
// var_dump((int)$a);


//typecast into float

// var_dump((float)$a);


//typecast to  boolean



//typecast to array
//   var_dump(array($a));

//typecast to object

// var_dump((object)$Car);


//typecast to NULL

// unset($a);
// var_dump($a);


//Math Functions in php 

// echo(pi());

//min and max function

// $minimumNumber=min(0,150,300,-15,9);
// echo $minimumNumber;

// $maximumNumber=max(150,9,-5,559,45,8);
// echo $maximumNumber;

// $a=abs(-5);
// echo $a;

// $a=sqrt(64);
// echo $a;

// $a=round(4.66);
// echo $a;

// echo(rand()); 


//creating an constant variable

// define("Greeting","HELLO");
// echo Greeting;


// const car='mustang GT';
// echo car; 



//constant arrays
// define("cars",[
//   "BMW",
//   "Audi",
//   "Prius"
// ]);
// var_dump(cars);  


//arthimethic operators
// $b=$a+5-5*4+2*4/3**4%2;
// 


//assignment operators

// $a=$b=5;

// $b+=1;
// $b-=1; 

// $b*=2;

// $b=5;
// $b/=2;
// echo $b;

// $b=5;
// $b%=2;
// echo $b; 

//comparsion operators 

// $b=4;
// echo $b==5; 
// $b=4;
// echo $b===5;

// $b=5;
// echo $b!=5; 
//  $b=5;
//  echo $b<>5;

// $b=5;
// echo $b!==5; 

 $a=5;
$b=9;

// echo $b>$a; 

  // echo $b>=$a; 
  //echo $a<=$b;

  // echo $a<=>$b;


  //increment & decrement operators

  // ++$a; 
  // $a++;
  // $a--;
  // --$a;
  // echo $a;

  //logical operators in php
  $a=5;
  $b=5;
  // echo $a and $b;

  // echo $a or $b;
  // echo $a xor $b;
// echo !$a; 

//string operators
$str='Hello';
$str2='World!';
// $str3=$str.$str2;
// $str1.=$str2;
// echo $str3;

//Array operators

$a=array(1,35,6,50);
$b=array(3,5,6,6,80);
// $c=$a+$b;
// var_dump($c);
// var_dump($a===$b);
// var_dump($a!=$b);
// var_dump($a<>$b);
// var_dump($a!==$b);


//conditional assignment operators

//ternary operator
//  $condition=$a<5 ? 'Blue':'pink';
//  echo $condition;

//null coalescing in php

// echo $color=$color ?? "red"; 


// $members=array('ali','junaid');
// foreach($members as $mem){
//   var_dump($mem);
// }


//functions in php 

// function sayHello($name){
// return  "Hello".$name;
// }
// echo sayHello('Ahmed!');


//Arrays in php
// $name=array("ali",'junaid');
// var_dump($name);
// var_dump($name[0]);
// $name[0]='ahmed';
// var_dump($name);

// foreach($name as $n){
//   echo $n;
// }


//Associate Arrays in php

$person=array("name"=>"Ali","age"=>25,"grade"=>"A");
// var_dump($person);

//acess the array
// echo $person["name"];
// //change the value 
//  $person["grade"]="B";
//  var_dump($person);

//looping an Associative Array
// foreach($person as $p=>$x){
//   echo "$p:$x  <br>";
// }

//update array items in a loop
// $cars=array("volvo","BMW","Toyota");
// foreach($cars as $c){
//   echo $x='cake';
// }

// $names=['ali','ahmed','junaid'];
// array_push($names,"abrar","jalil","jawad");
// var_dump($names);

$fruits=array("name"=>"apple","color"=>"red");
$fruits+=["items"=>5,"price"=>55];
// var_dump($fruits);

//remove array items
// array_slice($fruits,1,2);
// var_dump($fruits);

//remove items from an associate array

// array_diff($fruits,["apple,red"]);
// var_dump($fruits);

//remove last item from Array
// array_pop($fruits);

// var_dump($fruits);

//to remove the first item

// array_shift($fruits);
// var_dump($fruits);


//sorting arrays
//  sort($fruits);
//  var_dump($fruits);

// $numbers=array(44,-1,55,8,2,99,224,556);

//ascending order   (sort)
// sort($numbers);
// var_dump($numbers);

//descending order sorting (rsort)
// rsort($numbers);
// var_dump($numbers);

//alphabetically with value (asort)

$age=array("Ali"=>35,"junaid"=>36,"ahmed"=>25);
// asort($age);
// var_dump($age);

//Desending order sort with key (krsort)

// krsort($age);
// var_dump($age);

//multidimensional arrays in php

 $cars=array(
  array("volvo",23,'red'),
  array("bmw",33,'blue'),
  array("toyota",17,'green')
 );
// var_dump($cars);

//loop through multidimensional arrays

// for ($row = 0; $row < count($cars); $row++) {  // Iterate through available rows
//   echo "<p><b>Row number $row</b></p>";
//   echo "<ul>";
  
//   for ($col = 0; $col < count($cars[$row]); $col++) {  // Iterate through existing columns
//       echo "<li>" . $cars[$row][$col] . "</li>";
//   }

//   echo "</ul>";
//}

function printArray($arr){
return ($arr*$arr);
}
$fruits=[1,3,5,6,6,8];
// var_dump(array_count_values($fruits));
print_r(array_map("printArray",$fruits));



?>