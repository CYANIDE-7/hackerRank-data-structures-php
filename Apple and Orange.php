<?php

/*
 * Complete the 'countApplesAndOranges' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER s
 *  2. INTEGER t
 *  3. INTEGER a
 *  4. INTEGER b
 *  5. INTEGER_ARRAY apples
 *  6. INTEGER_ARRAY oranges
 */

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // Write your code here
    $numberOfApples=0;
    $numberOfOranges=0;
    
    foreach($apples as $apple){
        $x=$apple+$a;
        if($x >= $s && $x<= $t){
            $numberOfApples++;
            
        }
    }
    echo "$numberOfApples\n";
   foreach($oranges as $orange){
       $x= $orange+$b;
       if($x>=$s && $x<=$t){
           $numberOfOranges++;
       }
   }
echo "$numberOfOranges\n";
}

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$s = intval($first_multiple_input[0]);

$t = intval($first_multiple_input[1]);

$second_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$a = intval($second_multiple_input[0]);

$b = intval($second_multiple_input[1]);

$third_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$m = intval($third_multiple_input[0]);

$n = intval($third_multiple_input[1]);

$apples_temp = rtrim(fgets(STDIN));

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

$oranges_temp = rtrim(fgets(STDIN));

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);
