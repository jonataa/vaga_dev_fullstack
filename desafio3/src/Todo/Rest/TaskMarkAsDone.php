<?php

namespace App\Todo\Rest;

class TaskMarkAsDone
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
    $task = $this->repository->save(new Task($data['task'], $data['done']));
  }

}
