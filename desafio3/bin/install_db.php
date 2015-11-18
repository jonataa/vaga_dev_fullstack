<?php

$pdo = new PDO('sqlite:db/database.sq3');

$pdo->exec("DROP TABLE IF EXISTS tasks");
$pdo->exec("CREATE TABLE tasks (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT NOT NULL, done INTEGER NOT NULL DEFAULT 0)");
$pdo->query("
  INSERT INTO tasks (title, done)
  VALUES
    ('Fazer desafio da iTFLEX', 0),
    ('Tomar um café', 1)
");
