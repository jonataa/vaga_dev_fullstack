<?php

namespace App\Todo\Rest;

class TaskList
{

  public function __construct($container)
  {
    $this->repository = $container->get('repository');
  }

  public function __invoke ($request, $response)
  {
    return $response
      ->withHeader('Content-type', 'application/json')
      ->write(json_encode($this->repository->getAll()));
  }

}
