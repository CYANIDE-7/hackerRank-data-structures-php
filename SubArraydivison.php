<?php

// Complete the birthday function below.
function birthday($s, $d, $m) {
    $total = 0;
    $numWays=0;
    $sum=0;
    $lenght=count($s)-1;
    for($i=0;$i<=$lenght;$i++){
        for($j=0;$j<$m;$j++){
            $sum=$sum+$s[$j+$i];
        }
        if($sum==$d){
            $numWays++;
            
        }
        $sum=0;
    }
        return $numWays;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$dm = explode(' ', rtrim(fgets(STDIN)));

$d = intval($dm[0]);

$m = intval($dm[1]);

$result = birthday($s, $d, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
