<?php
function find($n1, $n2, $n3)
 {
    if ($n1 >= $n2 && $n1 >= $n3) {
        return $num1;
    } elseif ($n2 >= $n1 && $n2 >= $n3) {
        return $n2;
    } else {
        return $n3;
    }
}
$n1 = 10; 
$n2 = 25;
$n3 = 15; 
$largest = find($n1, $n2, $n3);
echo "The largest of the three numbers is: $largest";
?>
