<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Todo\TaskBundle\Task;
use App\Todo\TaskBundle\TaskRepository;

$container = new \Slim\Container;
$container['repository'] = new TaskRepository(new PDO('sqlite:../db/database.sq3'));
$app = new \Slim\App($container);

# debug mode
// $app->settings['displayErrorDetails'] = true;

$app->post('/task/', App\Todo\Rest\TaskCreate::class);
$app->get('/task/', App\Todo\Rest\TaskList::class);
$app->delete('/task/{id}/', App\Todo\Rest\TaskDelete::class);

$app->run();
