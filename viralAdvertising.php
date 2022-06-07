<?php




function viralAdvertising($n) {
    // Write your code here
    $likes=0;
    $shared=5;
    $totalLikes=0;
    for($i=0;$i<$n;$i++){
        $likes=floor($shared/2);
        $shared=$likes*3;
        $totalLikes+=$likes;
    }
   
       

return $totalLikes;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = viralAdvertising($n);

fwrite($fptr, $result . "\n");

fclose($fptr);
