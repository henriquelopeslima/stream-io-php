<?php

$courses = file('list-courses.txt');
$names = file('list-name.txt');

$fileCSV = fopen('file.csv', 'w');

foreach ($courses as $course) {
    $line = [trim($course), 'is a good course!'];
    fputcsv($fileCSV, $line, ';');
}

foreach ($names as $name) {
    $line = [trim($name), ' is a good developer!'];
    fputcsv($fileCSV, $line, ';');
}

fclose($fileCSV);