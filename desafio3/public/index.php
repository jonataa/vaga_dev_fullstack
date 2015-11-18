<?php

require_once __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../src/bootstrap.php';

# debug mode
// $app->settings['displayErrorDetails'] = true;

$app->post('/task/', App\Todo\Rest\TaskCreate::class);
$app->get('/task/', App\Todo\Rest\TaskList::class);
$app->delete('/task/{id}/', App\Todo\Rest\TaskDelete::class);

$app->run();
