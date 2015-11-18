<?php

namespace Api\Todo\TaskBundle;

class Task
{
  protected $title;
  protected $done = false;

  public function __construct($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  { return $this->title;
  }

  public function isDone()
  { return (bool) $this->done;
  }

}
