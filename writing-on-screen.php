<?php

const path = 'files.zip#first.txt';

$handle = fopen('zip://'.path, 'r');

stream_copy_to_stream($handle, STDOUT);
