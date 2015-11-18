<?php

require 'tests/AbstractTestCase.php';
require 'src/Api/Todo/TaskBundle/Task.php';
require 'src/Api/Todo/TaskBundle/TaskRepository.php';

use Api\Todo\TaskBundle\Task;
use Api\Todo\TaskBundle\TaskRepository;

class TaskTest extends AbstractTestCase
{

  public function testAddNewTask()
  {
    $task = new Task('Foo Bar');
    $rep = new TaskRepository($this->createPDO());
    $this->assertTrue($rep->save($task));
  }

  public function testCheckTaskStatusAsNotCompleted()
  {
    $task = new Task('Foo Bar');
    $this->assertFalse($task->isDone());
  }

  public function testMarkTaskAsDone()
  {
    $task = new Task('Foo Bar');
    $task->markAsDone();
    $this->assertTrue($task->isDone());
  }

}
