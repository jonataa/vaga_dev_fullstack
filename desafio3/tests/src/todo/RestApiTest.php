<?php

namespace Test;

use \Slim\App;
use \Slim\Http\Environment;

class RestApiTest extends AbstractTestCase
{

  public function testGetTaskList()
  {
    putenv('DB_DSN=sqlite:db/database.sq3');
    $env = Environment::mock([
        'REQUEST_METHOD' => 'GET',
        'REQUEST_URI' => '/task/',
        'SERVER_NAME' => 'localhost:8000',
    ]);

    $app = require 'src/bootstrap.php';
  }

}
