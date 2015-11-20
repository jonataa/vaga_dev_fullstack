<?php

namespace App\Todo\TaskBundle;

use \PDO;

class TaskRepository
{

  protected $table = 'tasks';
  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function save(Task $task)
  {
    $sql = $this->getSaveSQL(! empty($task->getId()));
    $stmt = $this->pdo->prepare($sql);

    if ($isUpdate = $task->getId() !== 0) {      
      $id = $task->getId();
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    }

    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':done', $done, PDO::PARAM_INT);

    $title = $task->getTitle();
    $done = $task->isDone();

    $success = $stmt->execute();

    if (false === $isUpdate)
      $task->setId($this->pdo->lastInsertId());

    return $task;
  }

  private function getSaveSql($isUpdate)
  {
    if ($isUpdate)
      return 'UPDATE tasks SET title = :title, done = :done WHERE id = :id';
    return 'INSERT INTO tasks (title, done) VALUES (:title, :done)';
  }

  public function removeById($id)
  {
    $stmt = $this->pdo->prepare('DELETE FROM tasks WHERE id = :id');
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
  }

  public function getAll()
  {
    $rows = array();
    $tasks = $this->pdo->query('SELECT id, title, done FROM tasks');
    foreach ($tasks as $task) {
      $rows[] = new Task($task['title'], $task['done'], $task['id']);
    }
    return $rows;
  }

  public function findById($id)
  {
    $stmt = $this->pdo->prepare('SELECT id, title, done FROM tasks WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $task = $stmt->fetch();
    return new Task($task['title'], $task['done'], $task['id']);
  }

  public function count()
  {
    $r = $this->pdo->query('SELECT count(*) FROM tasks');
    return (int) $r->fetch()[0];
  }

}
