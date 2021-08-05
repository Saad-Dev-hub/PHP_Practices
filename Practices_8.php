<?php
 
// Write a PHP program to compute the sum of the prime numbers less than 100.
// Note: There are 25 prime numbers are there in less than 100.
// 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 6
// 7, 71, 73, 79, 83, 89, 97 and sum of all these numbers is 1060. 
echo 'Prime Numbers from 0 :100<br/>';
function test($Number){
for ($i=2; $i < $Number ; $i++) { 
    if ($Number%$i==0) {
       return 'Not Prime <br>';
        //break;
    }
}
if ($i == $Number) {
    return'Prime';
 }
}
// test(6);
$sum=0;
for ($i=2; $i < 100 ; $i++) { 
    if (test($i)=='Prime') {
        echo "$i<br/>";
     $sum+=$i;
    
    }
   
}
echo 'The sum of the prime numbers less than 100 is '.$sum;
