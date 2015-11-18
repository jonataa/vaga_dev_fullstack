<?php

namespace Api\Todo\TaskBundle;

class TaskRepository
{

  protected $pdo;

  public function __construct(\PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function save(Task $task)
  {
    $stmt = $this->pdo->prepare('INSERT INTO tasks (title, done) VALUES (:title, :done)');
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':done', $done);

    $title = $task->getTitle();
    $done = $task->isDone();

    return $stmt->execute();
  }

}