<?php
$num1 = 75;
$num2 = 1010;
$num3 = 25;

$check = 0;
if ($num1 >= 20 && abs($num2 - $num3) > $num1) {
  $check++;
}

if ($num2 >= 20 && abs($num1 - $num3) > $num2) {
  $check++;
}


if ($num3 >= 20 && abs($num1 - $num2) > $num3) {

  $check++;
}
if ($check != 0) {

  echo "Input the first number : $num1 <br>";
  echo "Input the second number : $num2 <br>";
  echo "Input the third number : $num3 <br>";
  echo 'True';
} 
else 
{

  echo "Input the first number : $num1 <br>";
  echo "Input the second number : $num2 <br>";
  echo "Input the third number : $num3 <br>";
  echo 'False';
}
