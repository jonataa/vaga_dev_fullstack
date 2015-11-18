<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Todo\TaskBundle\TaskRepository;

$app = new \Slim\App;
$rep = new TaskRepository(new PDO('sqlite:../db/database.sq3'));

$app->get('/task', function ($request, $response, $args) use ($rep) {
  var_dump(json_encode($rep->getAll())); die;
    return $response
      ->withHeader('Content-type', 'application/json')
      ->write([123]);
});

$app->run();
