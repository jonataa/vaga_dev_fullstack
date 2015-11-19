<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Lib\Database;

Database::getInstance('sqlite:db/database.sq3');
Database::exec("DROP TABLE IF EXISTS tasks");
Database::exec("CREATE TABLE tasks (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT NOT NULL, done INTEGER NOT NULL DEFAULT 0)");
Database::exec("
  INSERT INTO tasks (title, done)
  VALUES
    ('Fazer desafio da iTFLEX', 0),
    ('Tomar um café', 1)
");
