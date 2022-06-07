<?php

/*
 * Complete the 'beautifulDays' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER i
 *  2. INTEGER j
 *  3. INTEGER k
 */

function beautifulDays($i, $j, $k) {
    // Write your code here
     $date=0;
     for($i;$i<=$j;$i++){
         if (!is_float(($i - strrev($i)) / $k)){
             $date++;
         }          
            }
            return $date;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$i = intval($first_multiple_input[0]);

$j = intval($first_multiple_input[1]);

$k = intval($first_multiple_input[2]);

$result = beautifulDays($i, $j, $k);

fwrite($fptr, $result . "\n");

fclose($fptr);
