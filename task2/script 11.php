<?php
function chk($number) {
    if ($number % 2 == 0) {
        echo "$number is an even number.";
    } else {
        echo "$number is an odd number.";
    }
}
$number = 7;
chk($number);
?>
