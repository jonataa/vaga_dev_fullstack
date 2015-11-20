<?php

namespace Test;

use \Slim\App;
use \Slim\Http\Environment;
use App\Lib\Database;

abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{

  protected $dsn = 'sqlite::memory:';

  public function createPDO()
  {
    putenv('DB=' . $this->dsn);
    Database::getInstance($this->dsn);
    Database::exec("CREATE TABLE tasks (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT NOT NULL, done INTEGER NOT NULL DEFAULT 0)");
    return Database::getInstance($this->dsn);
  }

  public function loadDatabaseDemo()
  {
    $this->createPDO();
    Database::exec('INSERT INTO tasks (title, done) VALUES ("Fazer desafio da iTFLEX", 0), ("Tomar um café", 1)');
  }

  public function databaseDestroy()
  {
    Database::exec('DROP TABLE tasks');
  }

  public function request($method, $path, $options = array())
  {
    $this->loadDatabaseDemo();
    Database::getInstance($this->dsn);

    ob_start();

    $env = Environment::mock(array_merge([
      'REQUEST_METHOD' => $method,
      'REQUEST_URI'    => $path
    ], $options));

    $app = require 'src/bootstrap.php';
    $app = require 'src/routes.php';
    $this->response = $app->run();

    $output = ob_get_clean();
    $this->databaseDestroy();

    return $output;
  }

}
