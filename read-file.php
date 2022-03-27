<?php

$file = fopen('list-courses.txt', 'r');

while (!feof($file)) {
    $course = fgets($file);

    echo $course . PHP_EOL;
}

fclose($file);