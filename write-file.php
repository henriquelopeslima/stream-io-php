<?php

$file = fopen('list-courses.txt', 'a');

$course = PHP_EOL.'Do zero ao avançado em 24 horas';

fwrite($file, $course);

fclose($file);