<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Todo\TaskBundle\Task;
use App\Todo\TaskBundle\TaskRepository;

$app = new \Slim\App;
$rep = new TaskRepository(new PDO('sqlite:../db/database.sq3'));

$app->post('/task/', function ($request, $response) use ($rep) {
  $data = $request->getParsedBody();
  if (empty($data['task']) || empty($data['done']))
      return $response->withStatus(400)->write('Required field missing');
  $task = $rep->save(new Task($data['task'], $data['done']));
  return $response->withStatus(201)->write(json_encode($task));
});

$app->get('/task/', function ($request, $response) use ($rep) {
  return $response
    ->withHeader('Content-type', 'application/json')
    ->write(json_encode($rep->getAll()));
});

$app->delete('/task/{id}/', function ($request, $response, $args) use ($rep) {
  $rep->removeById($args['id']);
  return $response->withStatus(204);
});

$app->run();
