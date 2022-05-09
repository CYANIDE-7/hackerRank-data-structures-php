<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    
    // Write your code here
        for ($i=0;$i<$n;$i++)  { 
            for ($j=0;$j<$n;$j++){
                
                if($j<$n-1-$i){
               echo " ";
                }
                else {
                    echo "#";
                }
                
            }

           echo "\n";           
            
       }
}



$n = intval(trim(fgets(STDIN)));

staircase($n);
