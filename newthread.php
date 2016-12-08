<?php

require_once(__DIR__ . '/init.php');

if ($argc != 3)
{
    throw new Exception('Invalid number of arguments provided');
}

$title = $argv[1];
$message = $argv[2];

$thread = new Thread();

// Actual implementation below
