<?php

$directoryCurrent = dir('.');

echo $directoryCurrent->path.PHP_EOL;

while ($file = $directoryCurrent->read()) {
    echo $file.PHP_EOL;
}