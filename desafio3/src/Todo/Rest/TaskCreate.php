<?php

namespace App\Todo\Rest;

use App\Todo\TaskBundle\Task;

class TaskCreate
{

  public function __construct($container)
  {
    $this->repository = $container->get('repository');
  }

  public function __invoke($request, $response, $args)
  {
    $data = $request->getParsedBody();
    if (! (isset($data['task']) || isset($data['done'])))
        return $response->withStatus(400)->write('Required field missing');
    $task = $this->repository->save(new Task($data['task'], $data['done']));

    return $response->withStatus(201)->write(json_encode($task));
  }
}
