<?php

namespace App\Lib;

use \PDO;

class Database
{

  protected static $pdo = null;

  private function __construct() {}

  public static function getInstance($dsn)
  {
    if (self::$pdo instanceof PDO)
      return self::$pdo;
    return self::$pdo = new PDO($dsn);
  }

  public static function exec($sql)
  { self::$pdo->exec($sql);
  }

  public static function destroy()
  { self::$pdo = null;
  }

}
