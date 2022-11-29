<?php

// make all constant strict 
// declare(strict_type = 1)

/*
//use of single line comment 
// variable declaration 
$var = 6;
//use of echo
echo "Surya Pratap Singh";
//line chanage 
echo "<br>";
// use of print to print value 
print $var;
//constant declarataion 
define("VARX", "It is a constant");
echo VARX."<br>";
const VARY= "You can also use const keyword to declare a coonstant";
echo VARY."<br>";
// variable variable
$foo = "bar";
$$foo = "car";
echo $$foo ."<br>";
// dynamically declaration of a constant
define('DYNAMIC_'.$foo , $$foo);
echo DYNAMIC_bar;
$x = 5.5;
$y = 7;
var_dump($x);
echo "<br>";
echo gettype($x);
function sum(int $x, int $y)
{
return $x+$y ;
}
echo sum(22,88) . "<br>";
echo __line__;
// What is an expression 
$x = 5; // here 5 is an expression 
$x = $y ; // here $y is also an expression anything which leads to an output 
// is called an expression 
// boolean 
$varbool = (string)true;
var_dump($varbool);
echo "<br>";
echo $varbool;
echo "<br>";
// integer
$x = 0xAA; // hexadecimal
var_dump($x);
echo "<br>";
echo $x;
echo "<br>";
$x = 055; // octal
var_dump($x);
echo "<br>";
echo $x;
echo "<br>";
$x = 0b1111; // octal
var_dump($x);
echo "<br>";
echo $x;
echo "<br>";
//floating point number;
$varfloat = floor(5.1);
var_dump($varfloat);
// infinite
$inf = PHP_FLOAT_MAX *2;
var_dump(is_infinite($inf));
echo $inf;
// String 
$varstr1 = "HELLO";
$varstr2 = "EVERYONE";
$varstr3 =  $varstr1 . "  ". $varstr2;
echo $varstr3;
//var_dump($varstr1);
//hereDoc
$doc = <<<TEXT
line1 $varstr1
line2 $varstr2
TEXT;
echo nl2br($doc);
//now doc
$doc = <<<'TEXT'
line1 $varstr1
line2 $varstr2
TEXT;
echo nl2br($doc);
// operators
$x = 5;
$y = 6;
// var_dump($x+$y);
// echo "<br>";
// var_dump($x-$y);
// echo "<br>";
// var_dump($x*$y);
// echo "<br>";
// var_dump($x/$y);
// echo "<br>";
// var_dump(fmod($x,$y));
// echo "<br>";
// var_dump($x**$y);
// echo "<br>";
// $x += 3;
// echo $x."<br>";
// $x -= 3;
// echo $x."<br>";
// $x *= 3;
// echo $x."<br>";
// $x /= 3;
// echo $x."<br>";
// $x **= 3;
// echo $x."<br>";
//var_dump($x <=> $y)
$varstr1 = "Varstr1 is not NULL";
$varstr2 = "EVERYONE";
$varstr1 = $varstr1 ?? "varstr1 is NULL";
echo $varstr1 ."<br>";
echo $x>$y? "$x is greater than $y ": "$y is greater than $x ";
$x = ['one'=>1, 'two'=>9, 'four'=>4];
$y = ['one'=>1, 'two'=>3, 'four'=>4];
var_dump($x + $y);
// operator precedence and associativity 
$x = 5;
$y = 6;
echo $x+$y/10;
// control structure in PHP 
if(false)
{
echo "if statement is printing";
}
else if (true)
{
echo "else if statement is printing";
}
else
{
echo "else statement is printing";
}
// null variable 
$x = NULL;
var_dump(is_null($x));
// Array in php 
$arr = ["one"=>1,"three"=>3 ,"five "=>5 , 6, "surya"];
$arr[51] = "pratap";
array_push($arr ,"singh");
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<pre>";
print_r($arr);
echo "</pre>";
array_shift($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo count($arr); // length of the array 
$arr[] = "harsh";
echo "<pre>";
print_r($arr);
echo "</pre>";
unset($arr[4]);
echo "<pre>";
print_r($arr);
echo "</pre>";
// two dimentional arrray 
$arr2= ["Name" =>["surya", "harsh", "aakash" =>["rajput", "Singh"]],
"place" => ["Meerut", "Baghpat"],
];
echo "<pre>";
print_r($arr2);
echo "</pre>";
var_dump(isset($arr[23])); // used to check key exist or not 
// loops in php 
$i = 11;
do {
echo $i . " ";
$i++;
}
while ($i < 10);
echo "<br>";
for ($i = 0; $i < 13; $i++) {
echo $i . ",";
}
echo "<br>";
$arr = [1, 3, 4, 5, 6, 8, 9];
foreach($arr as $a)
{
echo $a . " ,";
}
// switch statement 
$x='3';
switch($x)
{
case 1:
echo $x;
break;
case 2:
echo $x;
break;
case 3:
echo $x;
break;
case 4:
echo $x;
break;
case 5:
echo $x;
break;
default:
echo "It is a default statement ";
}
$x = 3;
match($x)
{
1 => print "Surya",
2 => print "Pratap",
3 => print "Singh"
};
echo sum('2', 12);
// use of tick statement 
function onTick()
{
echo 'Tick<br>';
}
register_tick_function('onTick');
declare (ticks=10);
$x = 1;
while($x<55)
echo $x++."<br>";
declare(strict_types=1);
function greet($x,$y) // pass by value
{
$val =$x-$y;
return $val;
}
$x = 7;
$y = 5;
var_dump(greet(y:$y,x:$x));
$x ='sum' ;
$y = 200;
$sum = function (...$numbers) use($y) :int
{
return array_sum($numbers)+$y;
};
echo $sum(1,4,5,6,8,10);
$arr =[1,2,3,4,5];
$arr2 = array_map(function($element){
return $element*2;
}, $arr);
print_r($arr);
print_r($arr2);
$array = [1,3,4,5];
$array2= array_map(fn($number)=>$number+$number, $array);
echo "<pre>";
print_r($array2);
echo "</pre>";
// time and date 
$ctime = time();
$next = time()+ 60*60*24;
$prev = time()- 60*60*24;
echo date('m/d/y g:ia') . "<br>";
echo date('m/d/y g:ia',$next). "<br>";
echo date('m/d/y g:ia',$prev). "<br>";
echo date_default_timezone_get(). "<br>";
date_default_timezone_set('asia/calcutta');
$date= date('m/d/y g:ia'). "<br>";
date('m/d/y g:ia' , strtotime('first monday of feb'));
echo "<pre>";
print_r(date_parse($date));
echo "</pre>";


// array functions

$arr = [
        'a' => 1,
        'f' => 4,
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'e' => 7,
];

echo "<pre>";
print_r(array_chunk($arr, 3));
echo "</pre>";

$arr1 = [1, 2, 4];
$arr2 = [5, 10, 22];

echo "<pre>";
print_r(array_combine($arr1, $arr2));
echo "</pre>";

$arr1 = [1, 2, 4, 12, 5, 7, 8, 9];

echo "<pre>";
print_r(array_values(array_filter($arr1, fn($number) => $number % 2 === 0)));
echo "</pre>";

echo "<pre>";
print_r(array_keys($arr, 4));
echo "</pre>";

echo "<pre>";
print_r(array_merge($arr1, $arr2));
echo "</pre>";

$array = [
        ['a' => 1, 'b' => 3, 'c' => 3, 'd' => 4],
        ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4],
        ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4],
];

echo "<pre>";
print_r(array_reduce($array, fn($sum, $val) => $sum + $val['a'] * $val['b']));
echo "</pre>";
// search 
$key = array_search(1, $arr1 );

var_dump($key);
echo "<br>";

if(in_array(12, $arr1))
echo "Element found";
else
echo "element not found";

asort($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";
// search 

ksort($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

list($a,,$c) = $arr2;
echo $a ."," .$c .",";

ini_set('max_execution_time',5);
sleep(9);
echo "surya";


trigger_error('Example error', E_USER_ERROR);
echo 1;
*/






?>
