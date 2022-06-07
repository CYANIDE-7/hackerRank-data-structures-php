<?php


function saveThePrisoner($n, $m, $s) {
    // Write your code here
    $m=$m%$n;
    $s=$s+$m-1;
    if($s>$n)
        $s=$s%$n;
        if($s==0)
            return $n;
          return $s;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $n = intval($first_multiple_input[0]);

    $m = intval($first_multiple_input[1]);

    $s = intval($first_multiple_input[2]);

    $result = saveThePrisoner($n, $m, $s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
