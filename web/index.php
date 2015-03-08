<?php

include '../vendor/autoload.php';

if (class_exists('Dotenv')) {
    Dotenv::load(dirname(__DIR__));
}
    
echo 'Hello World from '. getenv('FROM_ME') . '!';

