<?php

$cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];
$cities = array_map('strtoupper', $cities);
sort($cities);


echo '<ol>';

foreach ($cities as $city) {
    echo "<li><strong>$city</strong></li>";
}