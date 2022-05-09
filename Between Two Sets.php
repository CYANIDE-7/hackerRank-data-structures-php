<?php

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function getTotalX($a, $b) {
    // Write your code here


    $minB  = (int) min($b);
    $maxA  = (int) max($a);
    $count = 0;

    if ($minB >= $maxA) {

t        while ($minB >= $maxA) {
            $dividable = true;

            foreach($b as $value) {
                if ($value % $minB) {
                   $dividable = false;

                   break;
                }
            }

            if ($dividable) {
                break;
            }

            $minB = round($minB / 2);    
        }
        
        if ($dividable) {
            $vars = [];
            $vars[] = $minB;

            for ($i = $minB - 1; $i > 0; $i--) {
                if (!($minB % $i)) {
                    $vars[] = $i;
                }

                if ($i < $maxA) {
                    break;
                }
            }

            foreach($vars as $var) {
                $dividable = true;

                foreach($a as $aValue) {
                    if ($var % $aValue) {
                        $dividable = false;
                        break;
                    }
                }

                if ($dividable) {
                    $count++;
                }
            }
        }
    }

    return $count;
}


    


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($arr, $brr);

fwrite($fptr, $total . "\n");

fclose($fptr);
