<?php

use App\Todo\TaskBundle\TaskRepository;

$container = new \Slim\Container;
$container['repository'] = new TaskRepository(new PDO(getenv('DB')));
return new \Slim\App($container);
