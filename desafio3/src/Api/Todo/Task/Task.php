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
}
