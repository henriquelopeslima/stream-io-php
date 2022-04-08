<?php

class MyFilter extends php_user_filter
{
    public $stream;
    public string $work = 'Symfony';

    public function onCreate(): bool
    {
        $this->stream = fopen('php://temp', 'w+');

        return ($this->stream !== false);
    }

    public function filter($in, $out, &$consumed, $closing): int
    {
        $buffer = '';
        while ($bucket = stream_bucket_make_writeable($in)) {
            $lines = explode("\n", $bucket->data);

            foreach ($lines as $line) {
                if (true === str_contains($line, $this->work)) {
                    $buffer .= $line.PHP_EOL;
                }
            }
        }
        $bucketOut = stream_bucket_new($this->stream, $buffer);
        stream_bucket_append($out, $bucketOut);

        return PSFS_PASS_ON;
    }
}