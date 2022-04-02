<?php

const path = 'files.zip#first.txt';

echo file_get_contents('zip://'.path);