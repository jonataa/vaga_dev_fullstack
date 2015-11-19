<?php

namespace Test;

use \Slim\App;
use \Slim\Http\Environment;

class RestApiTest extends AbstractTestCase
{

  public function request($method, $path)
  {
    ob_start();

    putenv('DB=sqlite:db/database.sq3');
    $env = Environment::mock([
      'REQUEST_METHOD' => $method,
      'REQUEST_URI'    => $path
    ]);

    $app = require 'src/bootstrap.php';
    $app = require 'src/routes.php';
    $this->response = $app->run();

    return ob_get_clean();
  }

  public function testGetTaskList()
  {
    $this->request('GET', '/task/');    
    $this->assertEquals('200', $this->response->getStatusCode());
  }

}
