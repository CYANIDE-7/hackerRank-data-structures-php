<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here
    $ampm=substr($s,-2);
    $hour=substr($s,0,2);
    $rest=substr($s,2,-2);
    
    if($ampm=='PM' && $hour < 12 ){
    return $hour + 12 . $rest;
     }
    else if($ampm=='AM' && $hour==12) 
    {
    return "00". $rest;
    }
    else
    {
    return $hour.$rest;
    }
}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
