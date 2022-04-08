<?php

require 'MyFilter.php';

const filePath = 'list-courses.txt';
const filterName = 'fil.symfony';

$fileCourses = fopen(filePath, 'r');

stream_filter_register(filterName, MyFilter::class);

stream_filter_append($fileCourses, filterName);

echo file_get_contents("php://filter/read=".filterName."|string.tolower/resource=".filePath).PHP_EOL;

echo fread($fileCourses, filesize(filePath));