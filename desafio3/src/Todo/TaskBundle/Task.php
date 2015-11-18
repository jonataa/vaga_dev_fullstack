<?php

namespace App\Todo\TaskBundle;

class Task
{
  protected $id;
  protected $title;
  protected $done = false;

  public function __construct($title)
  {
    $this->title = $title;
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
