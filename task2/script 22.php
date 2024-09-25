<?php
function calculate($radius) {
    $area = pi() * pow($radius, 2);
    return $area;
}
$radius = 5;
$area = calculate($radius);
echo "The area of a circle with radius is: " . round($area, 2);
?>
