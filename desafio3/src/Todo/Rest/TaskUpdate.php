<?php

namespace App\Todo\Rest;

use App\Todo\TaskBundle\Task;

class TaskUpdate
{

  public function __construct($container)
  {
    $this->repository = $container->get('repository');
  }

  public function __invoke($request, $response, $args)
  {
    $data = $request->getParsedBody();
    if (! (isset($args['id']) || isset($data['done'])))
        return $response->withStatus(400)->write('Required field missing');

    $task = $this->repository->findById($args['id']);
    $task->setDone($data['done']);
    $this->repository->save($task);

    return $response->withStatus(200);
  }

}
