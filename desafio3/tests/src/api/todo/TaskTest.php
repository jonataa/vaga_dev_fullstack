<?php

require 'tests/AbstractTestCase.php';
require 'src/Api/Todo/TaskBundle/Task.php';
require 'src/Api/Todo/TaskBundle/TaskRepository.php';

use Api\Todo\TaskBundle\Task;
use Api\Todo\TaskBundle\TaskRepository;

class TaskTest extends AbstractTestCase
{

  public function setUp()
  {
    $this->rep = new TaskRepository($this->createPDO());
  }

  public function testAddNewTaskInRepository()
  {
    $task = $this->rep->save(new Task('Foo Bar'));
    $this->assertNotNull($task);
    $this->assertEquals(1, $task->getId());
    $this->assertEquals(1, $this->rep->count());
  }

  public function testCountRowsInRepository()
  {
    $this->rep->save(new Task('Foo Bar'));
    $this->rep->save(new Task('Fizz Buzz'));
    $this->assertEquals(2, $this->rep->count());
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
