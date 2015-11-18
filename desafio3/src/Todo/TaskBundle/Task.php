<?php

namespace App\Todo\TaskBundle;

class Task
{
  protected $id;
  protected $title;
  protected $done;

  public function __construct($title, $done = false)
  {
    $this->title = $title;
    $this->done = (bool) $done;
  }

  public function getId()
  { return $this->id;
  }

  public function setId($id)
  {
    $this->id = (int) $id;
  }

  public function getTitle()
  { return $this->title;
  }

  public function markAsDone()
  {
    $this->done = true;
  }

  public function isDone()
  { return (bool) $this->done;
  }

}
