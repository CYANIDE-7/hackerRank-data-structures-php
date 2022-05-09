<?php

/*
 * Complete the 'migratoryBirds' function below.
 *
 * The function is expected to return an INTEGER.
 * The function acceptsEGER_ARRAY arr as parameter.
 */

function migratoryBirds($arr) {
    // Write your code here
    
    $new= array(0,0,0,0);
    $Lenght=count($arr);

    for($i = 0; $i < $Lenght; $i++) {
        $new[$arr[$i]]++;
    }
    return (array_keys($new, max($new)))[0];
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
