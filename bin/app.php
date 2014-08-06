<?php

use Zend\Console\Console;
use ZF\Console\Application;

chdir(dirname(__DIR__));

include 'vendor/autoload.php';

$application = new Application(
    "ZF-Console Skeleton",
    "1.0",
    include 'config/routes.php',
    Console::getInstance()
);

$exit = $application->run();
exit($exit);
