
<?php
 
 $array=[2,4,1,50,20,14];
print_r($array);
 
 function ASD($array){
for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++)
    { if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }   
       
    }
}
return $array;
}
function DESC($array){
for($j = 0; $j < count($array); $j ++) {
  for($i = 0; $i < count($array)-1; $i ++)
  { if($array[$i] < $array[$i+1]) {
          $temp = $array[$i+1];
          $array[$i+1]=$array[$i];
          $array[$i]=$temp;
      }   
     
  }
}
return $array;
}
echo " Ascending Sorted Array is: ";
print_r(ASD($array));
echo "Descending Sorted Array is: ";
print_r(DESC($array));


?>
