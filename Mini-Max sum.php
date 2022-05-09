<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
    $mini=$arr[0];
    $max=$arr[0];
    $sum=0;
        for ($i=0;$i<count($arr);$i++)
        {
            if ($mini > $arr[$i]){
                $mini=$arr[$i];
            }
            if($max < $arr[$i]){
                $max=$arr[$i];
            }
            $sum += $arr[$i];
        }
        $minSum=$sum-$max;
        $maxSum=$sum-$mini;
        
        print ($minSum." ".$maxSum);
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
