<?php

namespace Api\Todo\TaskBundle;

class TaskRepository
{

  protected $table = 'tasks';
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

    $stmt->execute();
    $task->setId($this->pdo->lastInsertId());
    return $task;
  }

  public function count()
  {
    $r = $this->pdo->query('SELECT count(*) FROM tasks');
    return (int) $r->fetch()[0];
  }

}
