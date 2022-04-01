<?php

$file = fopen('list-courses.txt', 'r');

$sizeFile = filesize('list-courses.txt');
$courses = fread($file, $sizeFile);

echo $courses;

fclose($file);