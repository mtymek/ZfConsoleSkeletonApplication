<?php

namespace Application\Command;


use Zend\Console\Adapter\AdapterInterface;
use Zend\Console\ColorInterface;
use ZF\Console\Route;

class Hello
{
    public function __invoke(Route $route, AdapterInterface $console)
    {
        $name = $route->getMatchedParam('name');
        $console->write("Hello, ");
        $console->write("$name", ColorInterface::LIGHT_GREEN);
        $console->writeLine("!");
    }
}
