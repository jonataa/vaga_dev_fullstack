<?php

namespace App\Todo\TaskBundle;

class Task
{
  public $id;
  public $title;
  public $done;

  public function __construct($title, $done = false, $id = null)
  {
    $this->title = (string) $title;
    $this->done = (bool) $done;
    $this->id = (int) $id;
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

  public function setDone($done)
  { $this->done = (bool) $done;
  }

  public function markAsDone()
  {
    $this->done = true;
  }

  public function isDone()
  { return (bool) $this->done;
  }

}
