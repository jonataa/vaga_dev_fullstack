<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Todo\TaskBundle\TaskRepository;

$app = new \Slim\App;
$rep = new TaskRepository(new PDO('sqlite:../db/database.sq3'));

$app->get('/task', function ($request, $response, $args) {
    return $response
      ->withHeader('Content-type', 'application/json')
      ->write(json_encode([1,2,3]));
});

$app->run();
