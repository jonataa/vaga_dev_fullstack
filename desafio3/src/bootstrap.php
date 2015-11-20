<?php

use App\Todo\TaskBundle\TaskRepository;
use App\Lib\Database;

$container = isset($container) ? $container : new \Slim\Container;

$dsn = getenv('DB');

$container['db'] = function () use ($dsn) {
  return Database::getInstance($dsn);
};

$container['repository'] = function () use ($container) {
  return new TaskRepository($container->get('db'));
};

if (isset ($env) && !empty($env)) {
  $container['environment'] = function () use ($env) {
    return $env;
  };
}

return new \Slim\App($container);
