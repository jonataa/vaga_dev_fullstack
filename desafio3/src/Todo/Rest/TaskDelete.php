<?php

namespace App\Todo\Rest;

class TaskDelete
{

  public function __construct ($container)
  {
    $this->repository = $container->get('repository');
  }

  public function __invoke ($request, $response, $args)
  {
    $this->repository->removeById($args['id']);
    return $response->withStatus(204);
  }

}
