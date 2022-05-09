<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $positive=0;
    $negative=0;
    $zero=0;
    $totalCount=count($arr);
     
     for($i=0;$i<$totalCount;$i++){
         
         if($arr[$i]>0){
             $positive= $positive+1;
             
         }else if($arr[$i]<0){
             $negative=$negative+1;
             
         }else{
             $zero=$zero+1;
         }
         
                    
             }
         $positive=number_format($positive/$totalCount,6);
        // echo $positive;
         $negative=number_format($negative/$totalCount,6);
         //echo $negative;
         $zero=number_format($zero/$totalCount,6);
        //echo $zero;
    
    print ($positive."\n". $negative."\n".$zero."\n");
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
