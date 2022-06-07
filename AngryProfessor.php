<?php



function angryProfessor($k, $a) {
    // Write your code here
    $n=count($a);
    for( $i=1; $i<=$n;$i++){
        if($a[$i]<=0){
        $present++;
        
        }if($present==$k){
            return "NO";
        }
    }
return "YES";
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $n = intval($first_multiple_input[0]);

    $k = intval($first_multiple_input[1]);

    $a_temp = rtrim(fgets(STDIN));

    $a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = angryProfessor($k, $a);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
