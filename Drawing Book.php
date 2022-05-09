<?php

/*
 * Complete the 'pageCount' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER p
 */

function pageCount($n, $p) {
    // Write your code here
   $turns=0;
   if($p<=n/2 ){
 for($i=1 ;$i<$n ;$i++){
       if($i%2==0){
           $turns++;
       }if($i==$p){
           break;
       }
   }
    return $turns;
}
   else{
       for($i=$n;$i>1;$i--){
           if($i==$p){
               break;
           }
           if($i%2==0){
               $turns;
           }
       }
   }
   return $turns;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$p = intval(trim(fgets(STDIN)));

$result = pageCount($n, $p);

fwrite($fptr, $result . "\n");

fclose($fptr);
