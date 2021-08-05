<?php
// Write a PHP program to create and display unique 
//three-digit number using 1, 2, 3, 4. Also count how many three-digit numbers are there.
// Expected Output
// 123                                                      
// 124                                                      
// ...                                            
                                                   
// 431                                                      
// 432                                                      
// Total number of the three-digit-number is 24

$amount = 0;
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 4; $j++) {
        for ($k = 1; $k <= 4; $k++) {
            if ($k != $i && $k != $j && $i != $j) {
                $amount++;
                echo ($i . "" . $j . "" . $k . '<br/>');
            }
        }
    }
}
echo ('Total number of the three-digit-number is ' . $amount);
echo'<br/>';

?>