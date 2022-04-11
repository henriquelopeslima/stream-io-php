<?php

$file = new SplFileObject('file.csv', 'r');

while (!$file->eof()) {
    $line = $file->fgetcsv(';');
    echo utf8_encode($line[0] ?? '').PHP_EOL;
}
