<?php

/*
 * Complete the 'pickingNumbers' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function pickingNumbers($a) {
    // Write your code here
    sort($a);
    $length = 0;
    $number = $a[0];
    $longest = 0;
    foreach($a as $value){
        if ($value - $number <= 1){
            $length++;
            if ($length > $longest)
                $longest = $length;
        }
        else{
            $length = 1;
            $number = $value;
        }
    }
    return $longest;

}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = pickingNumbers($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
