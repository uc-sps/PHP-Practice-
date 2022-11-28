<?php

/**
 * @param int $int
 * @param float $float
 * @return bool
 */

 function sum(int $int, float $float)
 {
   echo $sum = $int + $float;
    if ($sum == ($int + $float)) {
        return true;
    }
    else{
        return false;
    }
 }

 /**
  * @var int
  */
$i = 10;

/** @var float */
$j = 20;

var_dump(sum($i, $j));