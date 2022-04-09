<?php

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => ['X-From: PHP', 'Content-Type:text/plain'],
        'content' => 'test body request',
    ]
]);

echo file_get_contents('https://httpbin.org/post', false, $context);