<?php


// for($i=1;$i<=6;$i++){
//     for($j=0;$j<$i;$j++){
//         echo'*';
//     }
//     echo "<br/>";
// }
// $N=5;
// for ($i=0; $i <=$N ; $i++) { 
//  for($j=0;$j<$N-$i-1;$j++)echo ' &nbsp;';
//  for($j=0;$j<(2*$i)+1;$j++)echo '*';
//     echo '<br/>';

// }
// $N=10;//مثلث متساوي الساقين
// for ($i=0; $i <$N ; $i++) { 
//     for($j=0;$j<$N-$i-1;$j++)echo '&nbsp&nbsp';
//     for($k=0;$k<(2*$i)+1;$k++) echo'*';
//     echo'<br/>';
// }
//------------------------------
// $N=10;
// for ($i=0; $i <$N ; $i++) { 
//     for($j=10;$j>$N-$i-1;$j--)echo '&nbsp&nbsp';
//     for($k=10;$k>(2*$i)+1;$k--) echo'*';
//     echo'<br/>';

// }
//------------------\
// //The coorect code
// $N=10;
// for($i=0;$i < $N;$i++){
// for($j=0;$j<=$i;$j++)echo '&nbsp&nbsp';
// for($k=0; $k<((2*$N)-(2*$i)-1);$k++)echo'*';
// echo '<br/>';
// }

// function print_pattern($num)
// {
// // Outer loop handles number of rows
// for ($i = 0; $i < $num; $i++)
// {
// // inner loop handles indentation
// for($k = $num; $k > $i+1; $k-- )
// {
// // Print spaces
// echo "&nbsp";
// }
// // inner loop handles number of stars
// for($j = 0; $j <= $i; $j++ )
// {
// // Print stars
// echo "* ";
// }
// // go to new line after each row pattern is printed
// echo "<br/>";
// }
// }
// //Call function and send number of lines as parameter
// $num = 5;
// print_pattern($num);
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
