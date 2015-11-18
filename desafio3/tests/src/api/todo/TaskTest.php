<?php

require 'src/Api/Todo/TaskBundle/Task.php';
require 'src/Api/Todo/TaskBundle/TaskRepository.php';

use Api\Todo\TaskBundle\Task;
use Api\Todo\TaskBundle\TaskRepository;

class TaskTest extends PHPUnit_Framework_TestCase
{

  public function createPDO()
  {
    $pdo = new PDO('sqlite::memory:');
    $pdo->exec("CREATE TABLE tasks (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT NOT NULL, done INTEGER NOT NULL DEFAULT 0)");
    return $pdo;
  }

  public function testAddNewTask()
  {
    $task = new Task('Foo Bar');
    $rep = new TaskRepository($this->createPDO());
    $this->assertTrue($rep->save($task));
  }

}
