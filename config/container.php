<?php

/**
 * Присваивание массива параметров приложения в контейнер с ключом config
 */

use Framework\Container\Container;

$container = new Container(require __DIR__ . '/dependencies.php');
$container->set('config', require __DIR__ . '/parameters.php');

return $container;