<?php

$count = 1;

// There is postfix and prefix increment functionality
while (++$count != 10) {
    echo $count . "<br/>";
    // $coun
}

echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br/>";
}


echo "<br>";

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($array as $num) {
    echo $num . "<br/>";
}

//or

foreach ($array as $index => $value) {
    echo "array[{$index}] = {$value} <br/>";
}
