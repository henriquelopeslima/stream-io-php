<?php

const path = 'files-password.zip#first.txt';

$context = stream_context_create([
   'zip' => [
       'password' => 'pass'
   ]
]);

echo file_get_contents('zip://'.path, false, $context);