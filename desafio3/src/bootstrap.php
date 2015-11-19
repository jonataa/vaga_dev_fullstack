<?php

use App\Todo\TaskBundle\TaskRepository;

//var_dump($_SERVER); die;

$container = new \Slim\Container;
$container['repository'] = new TaskRepository(new PDO(getenv('DB')));

if (isset ($env) && !empty($env)) {  
  $container['environment'] = function() use ($env) {
    return $env;
  };
}

return new \Slim\App($container);
