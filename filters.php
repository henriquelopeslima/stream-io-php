<?php

const filePath = 'list-courses.txt';

$fileCourses = fopen(filePath, 'r');

stream_filter_append($fileCourses, 'string.toupper');

echo fread($fileCourses, filesize(filePath));