<?php
function sumNumbers()
 {
    $sum = 0;
    for ($i = 1; $i <= 100; $i++)
    {
        $sum += $i;
    }
    
    return $sum;
}
$totalSum = sumNumbers();
echo "The sum of numbers from 1 to 100 is: $totalSum";
?>
