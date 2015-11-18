<?php

abstract class AbstractTestCase extends PHPUnit_Framework_TestCase
{

  public function createPDO()
  {
    $pdo = new PDO('sqlite::memory:');
    $pdo->exec("CREATE TABLE tasks (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT NOT NULL, done INTEGER NOT NULL DEFAULT 0)");
    return $pdo;
  }

}
