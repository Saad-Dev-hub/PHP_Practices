<?php
// Write a PHP program to print numbers between 1 to 100 which are divisible by 3, 5 and by both

echo 'Divided by 3 : <br>';
for ($i = 1; $i < 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . ' , ';
    }
}
echo '<br><br>Divided by 5 : <br>';
for ($i = 1; $i < 100; $i++) {
    if ($i % 5 == 0) {
        echo $i . ' , ';
    }
}
echo '<br/><br/>Divided by 3 & 5:<br> ';
for ($i = 1; $i < 100; $i++) {
    if (($i % 5 == 0)And ($i % 3 == 0)) {
        echo $i . ' , ';
    }
}
