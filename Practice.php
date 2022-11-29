<?php
// single line comment 

/*
multiline
comment 
*/

// this command is used to enable strict mode and after we can't type cast variables 
declare(strict_types=1);


$variable1 = 6; // int 
$string1 = "surya "; //string 

// define declare constant at runtime 
define('CONSTANT1', "It is a constant and always write in upper case ");  
 
// const keyword define constant at compile time 

echo CONSTANT1 . "<br>";
echo $string1 ."<br>";

$bool = true;

// variable variable

$foo = "bar";
$$foo = "Far";
echo $bar."</br>";

// find type of a varible 

echo gettype($string1);
echo "<br>";
var_dump($string1); // imp 



$x= (int)"6"; // typecasting 

// Checking varible is boolean or not   

unset($x);

// array 

$arr =[1,2,4,5];

$arr2 = array(1,2,4,5,3);
 var_dump($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

$arr3 = [
        "prince" => 1,
        "surya "=> 2
];

echo "<pre>";
print_r($arr3);
echo "</pre>";

$arr4= [
        "prince" => [
                "college" =>"Mangalmay",
                "city" =>"delhi"
        ],
        "surya "=> [
                "college" =>"VKP",
                "City"=> "meerut"
        ]
];

echo "<pre>";
print_r($arr4);
echo("</pre>");
 
array_pop($arr2); //used to pop last element 
array_shift($arr2); // used to remove first element from the array 


?>