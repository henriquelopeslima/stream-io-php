<?php

const filePath = 'list-courses.txt';

//$keyboard = fopen('php://stdin', 'r');

$input = trim(fgets(STDIN));

file_put_contents(filePath, PHP_EOL.$input, FILE_APPEND);